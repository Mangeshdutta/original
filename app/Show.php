<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable = [
        'title', 'slug', 'description',
        'short_description', 'show_type',
        'explicit_content', 'tags', 'author',
        'owner', 'owner_email', 'copyright', 'website',
        'language_id', 'time_zone_id', 'artwork', 'itunes_url',
        'spotify_url',
    ];
}
