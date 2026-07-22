<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceRole extends Model
{
    protected $fillable = [
        'name',
        'is_active'
    ];

    public function scheduleDetails()
    {
        return $this->hasMany(ScheduleDetail::class);
    }
}