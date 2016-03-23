<?php

use Illuminate\Database\Seeder;
use Walladog\SiteType;

class SiteTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteType::truncate();
        SiteType::create(array('name'=>'Zona al aire libre'));
        SiteType::create(array('name'=>'Local comercial'));
        SiteType::create(array('name'=>'Bar o Taverna'));
    }
}
