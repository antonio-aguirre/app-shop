<?php

use Illuminate\Database\Seeder;
use App\Product; //se añade para hacer uso del modelo de productos
use App\Category;
use App\ProductImage;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //model factories (se generarán datos ficticios para llenar en la DB)

        factory(Category::class, 5)->create();
        factory(Product::class, 100)->create(); // para hacer uso de los factories, dento va el nombre del modelo
        factory(ProductImage::class, 200)->create();

    }
}
