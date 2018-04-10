<?php

use Faker\Generator as Faker;

$factory->define(App\Violation::class, function (Faker $faker) {
    return [
      "violation_identinty_number" =>  $faker->phoneNumber,
      "violation_name"	=> $faker->name,
      "officer_id"	=> 1,
      "status"	=> "NEW"
    ];
});
