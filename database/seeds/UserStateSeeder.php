<?php

use Illuminate\Database\Seeder;
use Walladog\UserState;

class UserStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserState::truncate();
        UserState::create(array('name' => 'Inactivo'));
        UserState::create(array('name' => 'Activo'));
        UserState::create(array('name' => 'Bloqueado'));
    }
}
