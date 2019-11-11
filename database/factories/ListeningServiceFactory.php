<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Enums\ListeningServiceType;
use App\ListeningService;
use App\Show;
use Faker\Generator as Faker;

$factory->define(ListeningService::class, function (Faker $faker) {
    $listeningServiceLinks = [
        'Apple'         => 'https://itunes.apple.com/us/podcast/podcast-title/',
        'Spotify'       => 'https://open.spotify.com/show/',
        'Google'        => 'https://www.google.com/podcasts?feed=',
        'Overcast'      => 'https://overcast.fm/itunes123456789/',
        'Pocket'        => 'http://pca.st/',
        'Stitcher'      => 'https://www.stitcher.com/s?fid=',
        'Castro'        => 'https://castro.fm/itunes/',
        'RadioPublic'   => 'https://play.radiopublic.com/',
        'Breaker'       => 'https://www.breaker.audio/',
        'Tunein'        => 'http://tun.in/',
        'Castbox'       => 'https://castbox.fm/channel/',
        'Pandora'       => 'https://www.pandora.com/podcast/',
        'SoundCloud'    => 'https://soundcloud.com/',
        'IHeartRadio'   => 'https://www.iheart.com/podcast/',
    ];

    $showId = $attributes['show_id'] ?? factory(Show::class)->create();
    $key = $attributes['key'] ?? $faker->randomElement(ListeningServiceType::getKeys());
    $value = $listeningServiceLinks[$key] . $faker->randomNumber(9);

    return [
        'show_id' => $showId,
        'key' => $key,
        'value' => $value,
    ];
});
