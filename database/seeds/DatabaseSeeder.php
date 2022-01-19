<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DecideurSeeder::class);
        $this->call(DirectionSeeder::class);
        $this->call(DepartementSeeder::class);
        $this->call(DivisionSeeder::class);
        $this->call(EquipementSeeder::class);
        $this->call(ModuleSeeder::class);
        $this->call(CarteSeeder::class);
        $this->call(PortSeeder::class);
    }

}
