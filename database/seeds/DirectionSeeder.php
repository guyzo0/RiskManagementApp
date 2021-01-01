<?php

use Illuminate\Database\Seeder;

class DirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directions')->insert([
        [   
            'nom_direction' => 'Network',
        ],
        [
            'nom_direction' => 'Information-System',
        ],
        ]);
    }
}
