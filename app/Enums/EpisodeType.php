<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Full()
 * @method static static Trailer()
 * @method static static Bonus()
 */
final class EpisodeType extends Enum
{
    const Full    = 0;
    const Trailer = 1;
    const Bonus   = 2;
}
