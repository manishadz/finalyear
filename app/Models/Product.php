<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'category', 'min_price','max_price', 'image', 'end_time', 'is_active', 'user_id'];

     /**
     * The users that belong to the product.
     */
    public function users()
    {
        return $this->belongsToMany(Product::class)->withPivot('bidding_amount', 'is_closed');
    }
}
