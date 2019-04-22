<?php



/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Car;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\car::class, function (Faker $faker) {
    return [
        'make'  => $faker->randomElement([ 'ford', 'honda', 'toyota' ]),
        'model' => $faker->word(),
        'year'  => $faker->year(),

    ];
});