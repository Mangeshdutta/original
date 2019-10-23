<?php

namespace App;

use App\Enums\EpisodeType;
use BenSampo\Enum\Traits\CastsEnums;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use CastsEnums;

    protected $fillable = [
        'title', 'slug', 'artwork', 'summary',
        'episode_notes', 'episode_number', 'season_number',
        'episode_type', 'keywords', 'explicit_content', 'file_name',
        'content_type', 'file_size', 'duration', 'downloads_count', 'published_at',
    ];

    protected $casts = [
        'episode_type' => 'int',
    ];

    protected $enumCasts = [
        'episode_type' => EpisodeType::class,
    ];
}
