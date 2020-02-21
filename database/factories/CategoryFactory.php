<?php

use Faker\Generator as Faker;
use App\Category; // para hacer uso del modelo de categorias y se puedan extraer datos de la base de datos

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => ucfirst($faker->word), //'ucfirst' clase de PHP que pone en mayusculas la primera letra
        'description' => $faker->sentence(10)
    ];
});
