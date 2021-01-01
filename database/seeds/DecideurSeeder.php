<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DecideurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('decideurs')->insert([
             'id' => 1,
             'name' => 'decideur',
            'email' => 'decideur@gmail.com',
            'password' => Hash::make('decideurdecideur'),
        ]);
    }
}
