<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'site_name',
        'favicon',
        'logo',
        'facebook',
        'instagram',
        'twitter',
        'youtube',
        'street',
        'city',
        'country',
        'email',
        'phone',
    ];
}
