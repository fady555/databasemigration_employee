<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {

    $faker = \Faker\Factory::create();
    $faker_ar = \Faker\Factory::create('ar_JO');
    $faker_fr = \Faker\Factory::create('fr_FR');

    return [
        ''
    ];
});
