<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\ProductImage;

class Product extends Model
{
    //Se definen las relaciones entre los modelos, un avez que primero se definieron
    // en el modelado de la base de datos

    //$product->category
    public function category()
    {
        //un producto pertenece a una categoria (1:1)
        return $this->belongsTo(Category::class);
    }

    //$product->images
    public function images()
    {
        // un producto puede tener muchas imagenes (1:N)
        return $this->hasMany(ProductImage::class);
    }
}
