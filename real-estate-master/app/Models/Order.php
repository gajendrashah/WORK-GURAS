<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;

class Order extends Model
{
    //
    protected $fillable = ['product_id', 'name', 'email', 'contact', 'address','is_immediate_purchase', 'details'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
