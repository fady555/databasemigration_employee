<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Jop;
use Faker\Generator as Faker;

$factory->define(Jop::class, function () {

    $faker = \Faker\Factory::create();
    $faker_ar = \Faker\Factory::create('ar_JO');
    $faker_fr = \Faker\Factory::create('fr_FR');



    return [
        'name_en' => $faker->jobTitle,
        'name_ar' => $faker->jobTitle,
        'name_fr' => $faker->jobTitle,

        'nic_name' => substr($faker->firstName,'2'),

        'description_en' => $faker->realText(),
        'description_ar' => $faker_ar->realText(),
        'description_fr' => $faker_fr->realText(),

        'created_at' => $faker->date(),
        'updated_at' => $faker->date(),
    ];
});
/*
$faker = Faker\Factory::create('ar_JO');
echo $faker->firstName;
