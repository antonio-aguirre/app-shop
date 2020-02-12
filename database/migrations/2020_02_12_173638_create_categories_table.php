<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * Contiene el código para hacer efectiva la migración,
     * los cambios que esta migración va a producir
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * Para casos en los que se requiere resetear las migraciones,
     * resetear las migraciones y volver a un punto anterior
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
