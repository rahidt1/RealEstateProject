<?php

use Faker\Generator as Faker;

$factory->define(App\PropertyList::class, function (Faker $faker) {
    return [
        'propertyname'=>$faker->company,
        'location'=>$faker->city,
        'price'=>$faker->numberbetween($min='100000',$max='300000'),
        'area'=>$faker->numberbetween($min='500',$max='1400'),
        'bed'=>$faker->numberbetween($min='1',$max='4'),
        'bath'=>$faker->numberbetween($min='1',$max='4'),
        'patio'=>$faker->numberbetween($min='1',$max='2'),
        'garage'=>$faker->numberbetween($min='1',$max='2'),
        'description'=>$faker->realText($maxNbChars = 400, $indexSize = 2),
        'address'=>$faker->address,
        'owner'=>$faker->name,
        'agentname'=>$faker->name,
        'agentrole'=>$faker->randomElement($array = array ('Senior Realtor','Junior Realtor')),
        'agentphone'=> $faker->tollFreePhoneNumber,
    ];
});
