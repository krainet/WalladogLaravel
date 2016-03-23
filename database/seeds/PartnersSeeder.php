<?php

use Illuminate\Database\Seeder;


class PartnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*        factory(Walladog\Partner::class,2)->create()
            ->each(function($partner){

                $partner->image()->save(
                    factory(Walladog\Image::class)->make()
                );

                $partner->location()->save(
                    factory(Walladog\Location::class)->make()
                );

                $partner->pets()->saveMany(
                    factory(Walladog\Pet::class,3)->make()
                );

                $partner->address()->save(
                    factory(Walladog\Address::class)->make()
                );
            });*/
    }
}
