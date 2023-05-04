<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCondition extends Model
{
    protected $fillable = [
        'battery_power',
        'blue',
        'clock_speed',
        'dual_sim',
        'fc',
        'four_g',
        'int_memory',
        'mobile_wt',
        'n_cores',
        'ram',
        'sc_h',
        'sc_w',
        'talk_time',
        'px_height',
        'touch_screen',
        'px_width',
        'wifi',
        'm_dep',
        'pc',
        'three_g',
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
