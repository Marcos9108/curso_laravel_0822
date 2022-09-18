<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ropa', function (Blueprint $table) {
            $table->increments('pedido');
            $table->timestamps();
            $table->string('ropa',20);
            $table->string('talla',20);
            $table->date('genero');
            $table->date('marca');
            $table->date('cantidad');
            $table->date('color');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ropa');
    }
}
