<?php

use Faker\Generator as Faker;

$factory->define(App\HireBook::class, function (Faker $faker) {
    return [
        'hire_date'=>$faker->date,
    ];
});
