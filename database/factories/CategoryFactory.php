<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'nombre'=> ucfirst($faker->word),
        'descripcion'=>$faker->sentence(10)

    ];
});
