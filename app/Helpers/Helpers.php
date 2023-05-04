<?php

use Illuminate\Support\Str;

if (!function_exists('currency')) {
    function currency($amount)
    {
        $type = config('neputer.default_currency');

        return $type . ' ' . $amount;
    }
}


if (!function_exists('get_image_url')) {
    function get_image_url($folder = null, $image = null)
    {
        if (isset($folder) && isset($image)) {
            if (file_exists(public_path('uploads/' . $folder . '/' . $image))) {
                return asset('uploads/' . $folder . '/' . $image);
            }
    
            if (file_exists(public_path($folder . '/' . $image))) {
                return asset($folder . '/' . $image);
            }
    
            if (Str::startsWith($image, 'https://')) {
                return $image;
            }
        }

        return asset('static/no-image.png');
    }
}
