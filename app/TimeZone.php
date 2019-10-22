<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TimeZone extends Model
{
    protected $fillable = ['name', 'gmt'];

    public function shows(): HasMany
    {
        return $this->hasMany(Show::class);
    }
}
