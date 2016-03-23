<?php

use Illuminate\Database\Seeder;
use Walladog\PublicationStatus;

class PublicationStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PublicationStatus::truncate();
        PublicationStatus::create(array('name'=>'Pendiente revisión'));
        PublicationStatus::create(array('name'=>'Publicada'));
        PublicationStatus::create(array('name'=>'Bloqueado'));
    }
}
