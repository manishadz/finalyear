<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellProduct extends Model
{
    protected $fillable = [
        'battery_power',
        'bluetooth',
        'clock_speed',
        'dual_sim',
        'frontcamera',
        '4g',
        'internal_memory',
        'mobile_weight',
        'number_of_cores',
        'pixel_height',
        'ram',
        'screen_height',
        'screen_weight',
        'talk_time',
        'pixel_height',
        'touch_screen',

    ];
}
