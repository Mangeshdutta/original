<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Apple()
 * @method static static Spotify()
 * @method static static Google()
 * @method static static Overcast()
 * @method static static Pocket()
 * @method static static Stitcher()
 * @method static static Castro()
 * @method static static RadioPublic()
 * @method static static Breaker()
 * @method static static Tunein()
 * @method static static Castbox()
 * @method static static Pandora()
 * @method static static SoundCloud()
 * @method static static IHeartRadio()
 */
final class ListeningServiceType extends Enum
{
    const Apple         = 0;
    const Spotify       = 1;
    const Google        = 2;
    const Overcast      = 3;
    const Pocket        = 4;
    const Stitcher      = 5;
    const Castro        = 6;
    const RadioPublic   = 7;
    const Breaker       = 8;
    const Tunein        = 9;
    const Castbox       = 10;
    const Pandora       = 11;
    const SoundCloud    = 12;
    const IHeartRadio   = 13;
}
