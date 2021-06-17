
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vivienda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_vivienda', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('c_habit')->nullable();
            $table->integer('c_baños');
            $table->text('colonia');
            $table->integer('precio');
            $table->integer('tamanio');
            $table->string('municipio',100);
            $table->string('departamento',100);
            $table->string('categoria');
            $table->string('negociable');
            $table->string('estado', 100);
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
        Schema::dropIfExists('tb_vivienda');
    }
}
