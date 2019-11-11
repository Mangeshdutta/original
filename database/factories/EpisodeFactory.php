<?php

/** @var Factory $factory */

use App\Show;
use App\Episode;
use App\Enums\EpisodeType;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Episode::class, function (Faker $faker, $attributes) {
    return [
        'show_id'          => $attributes['show_id'] ?? factory(Show::class)->create()->id,
        'title'            => $title = ucwords($faker->words($faker->numberBetween(3, 5), true).$faker->lexify('???')),
        'slug'             => Str::slug($title),
        'episode_type'     => $episodeType = EpisodeType::getRandomValue(),
        'episode_number'   => $episodeType == EpisodeType::Full ? $faker->numberBetween(1, 20) : null,
        'season_number'    => $faker->boolean ? $faker->numberBetween(1, 20) : null,
        'keywords'         => implode(', ', $faker->words($faker->numberBetween(3, 5))),
        'explicit_content' => $faker->boolean,
        'file_name'        => Str::slug($faker->words($faker->numberBetween(3, 5), true)),
        'content_type'     => $faker->randomElement(['mp3', 'm4a']),
        'file_size'        => $faker->numberBetween(1 * 1024 * 1024, 10 * 1024 * 1024),
        'duration'         => $faker->time(),
        'downloads_count'  => $faker->numberBetween(0, 10000),
        'published_at'     => now()->addDays($faker->numberBetween(0, 30)),
    ];
});

$factory->state(Episode::class, 'with-nullables', function (Faker $faker) {
    return [
        'artwork'       => $faker->imageUrl(300, 300, null, true, null, true),
        'summary'       => $faker->paragraphs($faker->numberBetween(1, 2), true),
        'episode_notes' => $faker->paragraphs($faker->numberBetween(3, 5), true),
    ];
});
