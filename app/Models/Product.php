<?php

namespace App\Models;

use App\Models\ProductCondition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','company','model', 'description', 'condition','age', 'min_price','max_price', 'end_time', 'is_active','image',  'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

     /**
     * The users that belong to the product.
     */
    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('bidding_amount', 'is_closed')->withTimestamps();
    }

    public function condition()
    {
        return $this->hasOne(ProductCondition::class);
    }
}
