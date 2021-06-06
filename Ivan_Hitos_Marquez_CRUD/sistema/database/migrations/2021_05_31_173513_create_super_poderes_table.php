<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperPoderesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('super_poderes', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Tipo');
            $table->string('AreaDeEffecto');
            $table->string('Consecuencias');
            $table->longText('Descripcion');
            $table->timestamps();
            
            $table->unsignedBigInteger('hero_id')->unsigned();
            $table->foreign('hero_id')
                ->references('id')
                ->on('heroes')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('super_poderes');
    }
}
