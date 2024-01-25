<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Lead;
use Faker\Generator as Faker;

$factory->define(Lead::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'telefone' => $faker->phoneNumber,
        'empresa' => $faker->company,
        'status' => $faker->randomElement(['novo', 'em andamento', 'convertido']),
        // Adicione outros atributos conforme necessário
    ];
});
