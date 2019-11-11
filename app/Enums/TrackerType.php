<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Google()
 * @method static static Facebook()
 */
final class TrackerType extends Enum
{
    const Google =   0;
    const Facebook =   1;
}
