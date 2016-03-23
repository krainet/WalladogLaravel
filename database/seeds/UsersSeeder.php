<?php

use Illuminate\Database\Seeder;
use Walladog\Address;
use Walladog\Image;
use Walladog\Location;
use Walladog\Partner;
use Walladog\Pet;
use Walladog\User;
use Walladog\UserDetail;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // disable foreign key constraints

        User::truncate();
        UserDetail::truncate();
        Image::truncate();
        Partner::truncate();
        Address::truncate();
        Location::truncate();
        Pet::truncate();


        /**
         * oAuth2 Client setup for seeding
         */
        DB::statement("INSERT IGNORE INTO `oauth_clients` (`id`, `secret`, `name`, `created_at`, `updated_at`) 
                        VALUES ('1', 'walladog', 'walladog', NOW(), NOW());");

        factory(Walladog\User::class,3)->create()
            ->each(function($user){
                $user->detail()->save(
                    factory(Walladog\UserDetail::class)->make()
                );
                $user->detail->avatar()->save(factory(Walladog\Image::class)->make());
                $user->location()->save(factory(Walladog\Location::class)->make());
                $user->addresses()->save(factory(Walladog\Address::class)->make());


/*                factory(Walladog\Partner::class)->create(['user_id'=>$user->id,])
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
                    });*/

                /*factory(Walladog\Pet::class)->create(['user_id'=>$user->id])->each(function($pet){
                    $pet->location()->save(factory(Walladog\Location::class)->create());
                    $pet->images()->save(factory(Walladog\Image::class)->create());
                });*/


                /*$pet->location()->save(factory(Walladog\Location::class)->create());
                $pet->images()->save(factory(Walladog\Image::class)->create());*/

            });

        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // enable foreign key constraints

    }
}
