<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialMediaAccount extends Model
{
    protected $fillable = ['show_id', 'key', 'value'];
}
