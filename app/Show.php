<?php

namespace App;

use App\Enums\ShowType;
use BenSampo\Enum\Traits\CastsEnums;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use CastsEnums;

    protected $fillable = [
        'title', 'slug', 'description',
        'short_description', 'show_type',
        'explicit_content', 'tags', 'author',
        'owner', 'owner_email', 'copyright', 'website',
        'language_id', 'time_zone_id', 'artwork', 'itunes_url',
        'spotify_url',
    ];

    protected $casts = [
        'show_type' => 'int',
    ];

    protected $enumCasts = [
        'show_type' => ShowType::class,
    ];
}
