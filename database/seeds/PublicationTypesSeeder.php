<?php

use Illuminate\Database\Seeder;
use Walladog\PublicationType;

class PublicationTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PublicationType::truncate();
        PublicationType::create(array('name'=>'Noticias'));
        PublicationType::create(array('name'=>'Eventos'));
        PublicationType::create(array('name'=>'Noticias GEO'));
    }
}
