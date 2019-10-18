<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Episodic()
 * @method static static EpisodicSeason()
 * @method static static Serial()
 */
final class ShowType extends Enum
{
    const Episodic =   0;
    const EpisodicSeason =   1;
    const Serial = 2;
}
