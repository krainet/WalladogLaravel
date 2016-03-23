<?php

use Illuminate\Database\Seeder;

use Walladog\Address;
use Walladog\Image;
use Walladog\Location;
use Walladog\Partner;
use Walladog\Pet;
use Walladog\User;
use Walladog\UserDetail;

class PartnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Walladog\Partner::class)->create()
            ->each(function($partner){
                $partner->image()->save(
                    factory(Walladog\Image::class)->make(['partner_id'=>$partner->id])
                );

                $partner->location()->save(
                    factory(Walladog\Location::class)->make(['partner_id'=>$partner->id])
                );

                $partner->pets()->save(
                    factory(Walladog\Pet::class)->make(['partner_id'=>$partner->id])
                );

                $partner->address()->save(
                    factory(Walladog\Address::class)->make(['partner_id'=>$partner->id])
                );
            });
    }
}
