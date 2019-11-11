<?php

namespace App;

use App\Enums\ShowType;
use BenSampo\Enum\Traits\CastsEnums;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Show extends Model
{
    use CastsEnums;

    protected $fillable = [
        'title', 'slug', 'description',
        'short_description', 'show_type',
        'explicit_content', 'tags', 'author',
        'owner', 'owner_email', 'copyright', 'website',
        'language_id', 'time_zone_id', 'donation_message',
        'donation_link', 'subdomain', 'custom_domain', 'artwork',
    ];

    protected $casts = [
        'show_type' => 'int',
    ];

    protected $enumCasts = [
        'show_type' => ShowType::class,
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class)
                    ->withTimestamps();
    }

    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class);
    }

    public function timeZone(): BelongsTo
    {
        return $this->belongsTo(TimeZone::class);
    }

    public function episodes(): HasMany
    {
        return $this->hasMany(Episode::class);
    }

    public function socialMediaAccounts(): HasMany
    {
        return $this->hasMany(SocialMediaAccount::class);
    }

    public function trackers(): HasMany
    {
        return $this->hasMany(Tracker::class);
    }
}
