<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Activity;

class Schedule extends Model
{
    protected $fillable = [
        'activity_id',
        'date',
        'time',
        'location',
        'theme'
    ];

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public function details()
    {
        return $this->hasMany(ScheduleDetail::class);
    }
}