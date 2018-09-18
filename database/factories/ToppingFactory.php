<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Topping::class, function (Faker $faker) {
    $pizzas = App\Pizza::pluck('id')->toArray();
    return [
        'pizza_id'=>$faker->randomElement($pizzas),
        'name' => $faker->name,
    ];
});
