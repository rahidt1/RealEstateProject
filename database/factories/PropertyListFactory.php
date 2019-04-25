<?php

use Faker\Generator as Faker;

$factory->define(App\PropertyList::class, function (Faker $faker) {
    return [
        'propertyname'=>$faker->company,
        'location'=>$faker->city,
        'price'=>$faker->numberbetween($min='100000',$max='300000'),
        'address'=>$faker->address,
        'owner'=>$faker->name,
        'agentname'=>$faker->name,
    ];
});
