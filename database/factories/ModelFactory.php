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
        'id_user_state' => $faker->numberBetween(1,3),
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

$factory->define(Walladog\Image::class, function (Faker\Generator $faker) {
    $userName   = $faker->userName;
    $img_short  = $faker->imageUrl(50, 50, 'animals');
    $img_big    = $faker->imageUrl(300, 300, 'animals', true, $userName);
    return [
        'name' => $userName,
        'url_short' => $img_short,
        'url_big' => $img_big,
        /*'location_id' => function(){
            return factory(Walladog\Location::class)->create()->id;
        }*/
    ];
});

$factory->define(Walladog\Pet::class, function (Faker\Generator $faker) {
    return [
        'pet_name' => $faker->name,
        'id_pet_type' => 1,
        'id_pet_race' => $faker->numberBetween(1,201),
        'pet_cross_description' => $faker->sentence(10),
        'sterile' => $faker->numberBetween(0,1),
        'birthdate' => $faker->dateTimeThisCentury,
        'pet_description' => $faker->paragraph(),
        'rating' => $faker->numberBetween(1,10),
        'visits' => $faker->numberBetween(0,1000)
    ];
});

$factory->define(Walladog\Partner::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph(),
        'url' => $faker->url,
        'tel' => $faker->phoneNumber
    ];
});

$factory->define(Walladog\Address::class, function (Faker\Generator $faker) {
    return [
        'address1' => $faker->streetAddress,
        'address2' => $faker->address,
        'province_txt' => $faker->city,
        'city_txt' => $faker->city,
        'cp_txt' => $faker->postcode
    ];
});


















