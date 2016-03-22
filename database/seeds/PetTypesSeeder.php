<?php

use Illuminate\Database\Seeder;
use Walladog\PetType;

class PetTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PetType::truncate();
        PetType::create(array('name'=>'Perros'));
        PetType::create(array('name'=>'Gatos'));
        PetType::create(array('name'=>'Iguanas'));
    }
}
