<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductImage extends Model
{
    //$productimage->product
    public function product()
    {
        // una imagen pertenece a un producto (1:1)
        return $this->belongsTo(Product::class);
    }
}
