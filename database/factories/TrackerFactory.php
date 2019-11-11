<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Enums\TrackerType;
use App\Show;
use App\Tracker;
use Faker\Generator as Faker;

$factory->define(Tracker::class, function (Faker $faker) {
    return [
        'show_id'   => factory(Show::class)->create(),
        'service'   => $faker->randomElement(TrackerType::getValues()),
        'code'      => $faker->numerify('##########'),
    ];
});
