<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Whitecube\LaravelTimezones\Casts\TimezonedDatetime;
use Whitecube\LaravelTimezones\Concerns\HasTimezonedTimestamps;

class Appointment extends Model
{
    use HasFactory, HasTimezonedTimestamps;

    protected $casts = [
        'start_time' => TimezonedDatetime::class,
        'end_time' => TimezonedDatetime::class,
        'created_at' => TimezonedDatetime::class,
        'updated_at' => TimezonedDatetime::class,
    ];

}   