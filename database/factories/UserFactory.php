<?php

use App\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'username' =>$faker->lastname,
        'password' => $faker->password,
        'phone'=> $faker->tollFreePhoneNumber,
        'address' =>$faker->address,
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'email_verified_at' => now(),
        'company' =>$faker->company,
        'role'=>$faker->randomElement($array = array ('admin','user')),
        'login_token'=>str_random(10),
        'is_logged_in'=>$faker->boolean,
		'is_active'=>$faker->boolean,
    ];
});
