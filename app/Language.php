<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Language extends Model
{
    protected $fillable = ['name', 'code'];

    public function shows(): HasMany
    {
        return $this->hasMany(Show::class);
    }
}
