<?php
 
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Blog;
use Illuminate\Support\Str;
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
 
$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 10, $variableNbWords = true),  // Random task title
        'body' => $faker->text(), // Random task description
    ];
});