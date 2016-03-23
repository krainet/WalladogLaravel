<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // disable foreign key constraints
        $this->call(PetTypesSeeder::class);
        $this->call(PetRacesSeeder::class);
        $this->call(UserStateSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(PartnersSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // enable foreign key constraints
    }
}
