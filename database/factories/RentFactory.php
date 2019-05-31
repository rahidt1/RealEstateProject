<?php

use Faker\Generator as Faker;

$factory->define(App\Rent::class, function (Faker $faker) {
    return [
        'rent'=>$faker->randomElement($array = array ('Yes','No')),
    ];
});
