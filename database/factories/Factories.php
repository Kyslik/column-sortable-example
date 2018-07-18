<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'name'    => $faker->company,
        'country' => $faker->country,
    ];
});

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name'       => $faker->name,
        'email'      => $faker->unique()->safeEmail,
        'company_id' => resolve(App\Company::class)->inRandomOrder()->first()->id ?? factory(App\Company::class, 25)->create()
                                                                                                                    ->first()->id,
    ];
});

$factory->define(App\UserDetail::class, function (Faker $faker) {
    return [
        'phone_number' => $faker->phoneNumber,
        'address'      => $faker->address,
    ];
});
