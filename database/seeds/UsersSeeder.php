<?php

use Illuminate\Database\Seeder;
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

        factory(Walladog\User::class,50)->create()
            ->each(function($user){
                $user->detail()->save(
                    factory(Walladog\UserDetail::class)->create(['user_id'=>$user->id])
                );

                $user->location()->save(
                    factory(Walladog\Location::class)->create(['user_id'=>$user->id])
                );
                
                /*$user->address_delivery()->save(
                    factory(Walladog\Address::class)->make()
                );
                $user->address_invoice()->save(
                    factory(Walladog\Address::class)->make()
                );*/
                
                
                
        });

        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // enable foreign key constraints

    }
}
