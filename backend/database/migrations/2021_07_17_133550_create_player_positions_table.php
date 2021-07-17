<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_position', function (Blueprint $table) {
            $table->integer('player_id')->unsigned();
            $table->integer('position_id')->unsigned();
            $table->foreign('player_id')
                ->references('id')
                ->on('players')
                ->onDelete('cascade');
            
            $table->foreign('position_id')
                ->references('id')
                ->on('positions')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_position');
    }
}
