<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'church_name',
        'address',
        'phone',
        'email',
        'facebook',
        'instagram',
        'youtube'
    ];
}