<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Twitter()
 * @method static static Instagram()
 * @method static static Facebook()
 * @method static static Linkedin()
 * @method static static Patreon()
 * @method static static Youtube()
 * @method static static Medium()
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
