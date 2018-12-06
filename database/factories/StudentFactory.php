<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'code' => $faker->unique()->ean13,
        // 'age' => (new Carbon($faker->dateTimeThisCentury->format('Y-m-d')))->age,
        'avatar' => 'student-profile.png'
    ];
});
