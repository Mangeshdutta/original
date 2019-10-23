<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Episodic()
 * @method static static Serial()
 */
final class SocialMediaAccountType extends Enum
{
    const Twitter   = 0;
    const Instagram = 1;
    const Facebook  = 2;
    const Linkedin  = 3;
    const Patreon   = 4;
    const Youtube   = 5;
    const Medium    = 6;
}
