<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Entities\Tarea;
use Faker\Generator as Faker;

$factory->define(Tarea::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'descripcion' => $faker->text($maxNbChars = 150),
        'prioridad_id' => $faker->numberBetween($min = 1, $max = 3),
        'usuario_id' =>  $faker->numberBetween($min = 1, $max = 6), 
        'tags' => $faker->word,      
    ];
});
