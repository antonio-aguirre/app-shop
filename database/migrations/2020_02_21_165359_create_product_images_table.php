<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_images', function (Blueprint $table) {
            $table->increments('id');

            $table->string('image'); // se guardará el path donde esté la imagen o la URL
            $table->boolean('featured')->default(false); // para destacar a la imagen principal que mostrará el producto
                                                         // por defalult se pones 'false' ya que el usuario va a destacar la imagen y si no, se seleccionará la primera imagen

            //Llave foranea hacia tabla de productos
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_images');
    }
}
