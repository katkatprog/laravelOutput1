<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerPosition extends Model
{
    use HasFactory;
    protected $table = 'player_position'; 
    //↑これがないと、モデルは使うテーブルをplayer_positionsとなってしまう。
}
