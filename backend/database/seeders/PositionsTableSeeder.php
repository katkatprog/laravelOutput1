<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pstns = [
            ['name' => 'PG'],
            ['name' => 'SG'],
            ['name' => 'SF'],
            ['name' => 'PF'],
            ['name' => 'C'],
           ];

        foreach($pstns as $pstn) {
            DB::insert("insert into positions (name) values (?)", [$pstn['name']]);
        }
    }
}
