<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Models\Clinic;
$factory->define(Clinic::class, function (Faker $faker) {
    return [
        'location'=>$faker->streetName,
        'desc'=>$faker->text(100),
        'status'=>$faker->numberBetween(0,1),
        'specialty_id'=>$faker->numberBetween(1,10),
    ];
});
