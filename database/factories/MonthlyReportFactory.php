<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MonthlyReport;
use Faker\Generator as Faker;

$factory->define(MonthlyReport::class, function (Faker $faker) {
    return [
        'numOfKumite' => $faker->numberBetween(0, 10),
        'numOfNonKumite' => $faker->numberBetween(0, 10),
        'numOfVisitors' => $faker->numberBetween(0, 10),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
