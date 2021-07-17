<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $plyrs = [
            ['name' => 'Kevin Durant'],
            ['name' => 'LeBron James'],
            ['name' => 'Kyrie Irving'],
            ['name' => 'Draymond Green'],
            ['name' => 'Jayson Tatum'],
           ];

        foreach($plyrs as $plyr) {
            DB::insert("insert into players (name) values (?)", [$plyr['name']]);
        }
    }
}
