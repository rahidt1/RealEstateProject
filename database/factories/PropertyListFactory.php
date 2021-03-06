<?php

use Faker\Generator as Faker;

$factory->define(App\PropertyList::class, function (Faker $faker) {
    return [
        'propertyname'=>$faker->company,
        'location'=>$faker->city,
        'price'=>$faker->numberbetween($min='10000',$max='100000'),
        'view'=>$faker->randomElement($array = array ('Hill View Property','River View Property','Sea View Property')),
        'image'=>$faker->randomElement($array = array ('1.jpg','2.jpg','3.jpg')),
        'thumbnail'=>$faker->randomElement($array = array ('property_10.jpg','property_1.jpg','property_4.jpg','property_5.jpg','property_7.jpg','property_8.jpg')),
        'area'=>$faker->numberbetween($min='0',$max='1400'),
        'bed'=>$faker->numberbetween($min='1',$max='4'),
        'bath'=>$faker->numberbetween($min='1',$max='4'),
        'patio'=>$faker->numberbetween($min='1',$max='2'),
        'garage'=>$faker->numberbetween($min='1',$max='2'),
        'description'=>$faker->realText($maxNbChars = 400, $indexSize = 2),
        'address'=>$faker->address,
        'country'=>$faker->country,
        'owner'=>$faker->name,
        'agentname'=>$faker->name,
        'agentrole'=>$faker->randomElement($array = array ('Senior Realtor','Junior Realtor')),
        'agentphone'=> $faker->tollFreePhoneNumber,
    ];
});
