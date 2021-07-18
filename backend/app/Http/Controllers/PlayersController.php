<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\PlayerPosition;
use App\Models\Position;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlayersController extends Controller
{
    //
    public function index(){
        $plyrs = Player::all();
        $pstns = Position::all();
        $tms = Team::all();
        return view('players.index', ['plyrs' => $plyrs, 'pstns' => $pstns, 'tms' => $tms]);
    }
    public function show($id){
        $plyr = Player::find($id);
        // var_dump($pstns);
        return view('players.show', ['plyr' => $plyr]);
        // return view('players.show', ['plyr' => $plyr]);
    }
    public function create(Request $request){
        $plyr = new Player();
        $plyr->name = $request->playerName;
        $plyr->timestamps = false;
        $plyr->save();

        // DB::insert('insert into player_position (player_id, position_id) values (?, ?)', 
        //     [$plyr->id, $request->positionId]);

        //player_positionテーブルへのインザート
        // $plyrPstn = new PlayerPosition();
        // $plyrPstn->player_id = $plyr->id;
        // $plyrPstn->position_id = $request->positionId;
        // $plyrPstn->timestamps = false;
        // $plyrPstn->save();

        //チェックボックス用の登録
        if($request->PG != null){
            $this->insertPosition($plyr,1);
        }
        if($request->SG != null){
            $this->insertPosition($plyr,2);
        }
        if($request->SF != null){
            $this->insertPosition($plyr,3);
        }
        if($request->PF != null){
            $this->insertPosition($plyr,4);
        }
        if($request->C  != null){
            $this->insertPosition($plyr,5);
        }

        return redirect('/players');
    }
    public function insertPosition($plyr, $positionId){
        $plyrPstn = new PlayerPosition();
        $plyrPstn->player_id = $plyr->id;
        $plyrPstn->position_id = $positionId;
        $plyrPstn->timestamps = false;
        $plyrPstn->save();
    }

    public function delete($id){
        $plyr = Player::find($id);
        $plyr->delete();
        return redirect('/players');
    }
}
