<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tms = [
            ['name' => 'GSW'],
            ['name' => 'OKC'],
            ['name' => 'CAVS'],
            ['name' => 'BOS'],
            ['name' => 'NETS'],
           ];

        foreach($tms as $tm) {
            DB::insert("insert into teams (name) values (?)", [$tm['name']]);
        }
    }
}
