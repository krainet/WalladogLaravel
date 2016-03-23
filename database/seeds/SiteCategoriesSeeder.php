<?php

use Illuminate\Database\Seeder;
use Walladog\SiteCategory;

class SiteCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteCategory::truncate();
        SiteCategory::create(array('name'=>'Dog Friendly'));
        SiteCategory::create(array('name'=>'Cat Friendly'));
        SiteCategory::create(array('name'=>'Nunca vayas'));
    }
}
