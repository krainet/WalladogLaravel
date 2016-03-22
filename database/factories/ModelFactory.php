<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

use Illuminate\Support\Facades\DB;

$factory->define(Walladog\User::class, function (Faker\Generator $faker) {
    return [
        'username' => $faker->userName,
        'email' => $faker->safeEmail,
        'password' => bcrypt('secret'),
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'identification_number_type' => $faker->randomElement(array('CIF','NIF','DNI')),
        'identification_number' => strtoupper($faker->numerify('########').$faker->lexify('?')),
        'birthdate' => $faker->dateTimeThisCentury->format('Y-m-d'),
        'api_token' => str_random(60),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Walladog\UserDetail::class, function (Faker\Generator $faker) {
    return [
        'short_description' => $faker->paragraph()
    ];
});

$factory->define(Walladog\Location::class, function (Faker\Generator $faker) {
    $lat = $faker->latitude($min = -90, $max = 90);
    $lon = $faker->longitude($min = -180, $max = 180);
    return [
        'country' => 'ES',
        'city' => $faker->city,
        'latitude' => $lat,
        'longitude' => $lon,
        'location_point' => DB::raw("(GeomFromText('POINT(".$lat." ".$lon.")'))")
    ];
});
