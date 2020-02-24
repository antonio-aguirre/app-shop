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

        /*factory(Category::class, 5)->create();
        factory(Product::class, 100)->create(); // para hacer uso de los factories, dento va el nombre del modelo
        factory(ProductImage::class, 200)->create();*/

        //se crearan 5 categorias y se almacenarán en la base de datos
        $categories = factory(Category::class, 5)->create();
        $categories->each(function ($category){

            //Por cada categoria se crearan 20 productos, pero no se almacenan en la base de datos
            //ya que se almacenan cuando se hace la relación con cada categorya creada
            $products = factory(Product::class, 20)->make();
            $category->products()->saveMany($products);

            //Por cada producto se van a crear 5 imagenes, pero no se almacenarán en la base de datos,
            //se alamcenarán cuando se haga la relación con cada producto generado
            $products->each(function ($products){
                $images = factory(ProductImage::class, 5)->make();
                $products->images()->saveMany($images);
            });
        });

    }
}
