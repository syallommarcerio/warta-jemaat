<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScheduleDetail extends Model
{
    protected $fillable = [
        'schedule_id',
        'service_role_id',
        'servant_id'
    ];

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public function serviceRole()
    {
        return $this->belongsTo(ServiceRole::class);
    }

    public function servant()
    {
        return $this->belongsTo(Servant::class);
    }
}