<?php

use Illuminate\Database\Seeder;
use Walladog\PublicationCategory;

class PublicationCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PublicationCategory::truncate();
        PublicationCategory::create(array('name'=>'Noticias Generales'));
        PublicationCategory::create(array('name'=>'Noticias Perros'));
        PublicationCategory::create(array('name'=>'Noticias Gatos'));
    }
}
