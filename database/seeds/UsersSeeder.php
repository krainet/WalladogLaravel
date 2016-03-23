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
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // enable foreign key constraints

        /**
         * oAuth2 Client setup for seeding
         */
        DB::statement("INSERT IGNORE INTO `oauth_clients` (`id`, `secret`, `name`, `created_at`, `updated_at`) 
                        VALUES ('1', 'walladog', 'walladog', NOW(), NOW());");

        factory(Walladog\User::class,25)->create()
            ->each(function($user){
                $user->detail()->save(
                    factory(Walladog\UserDetail::class)->make()
                );
                $user->detail->avatar()->save(factory(Walladog\Image::class)->make());
                $user->location()->save(factory(Walladog\Location::class)->make());
                $user->addresses()->save(factory(Walladog\Address::class)->make());
                $user->partner()->save(factory(Walladog\Partner::class)->make());

                $user->partner->image()->save(
                    factory(Walladog\Image::class)->make()
                );

                $user->partner->location()->save(
                    factory(Walladog\Location::class)->make()
                );

                $user->partner->pets()->saveMany(
                    factory(Walladog\Pet::class,3)->make()
                )->each(function($pet){
                    $pet->images()->saveMany(
                        factory(Walladog\Image::class,3)->make()
                    );
                });

                $user->partner->address()->save(
                    factory(Walladog\Address::class)->make()
                );

            });

        factory(Walladog\User::class,25)->create()
            ->each(function($user){
                $user->detail()->save(
                    factory(Walladog\UserDetail::class)->make()
                );
                $user->detail->avatar()->save(factory(Walladog\Image::class)->make());
                $user->location()->save(factory(Walladog\Location::class)->make());
                $user->addresses()->save(factory(Walladog\Address::class)->make());

                $user->pets()->save(factory(Walladog\Pet::class)->make());
            });



    }
}
