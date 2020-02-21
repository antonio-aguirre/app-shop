<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    //$category->products
    public function products()
    {
        //una categoria tiene muchos productos (1:N)
        return $this->hasMany(Product::class);
    }
}
