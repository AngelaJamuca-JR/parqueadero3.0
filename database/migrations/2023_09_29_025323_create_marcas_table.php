<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->id('idmarca');
            $table->string('marca', 45);




            //tipo vehiculo
             //Rferencia a la otra tabla  del mismo tipo (integer)
             $table->unsignedBigInteger('tipovehiculo_id')-> unique();
 
             //Restricciones de la llave foranea 
             $table->foreign('tipovehiculo_id')
                   ->references('idtipovehiculo')
                   -> on('tipovehiculos')
                     // Set null significa: que si se borran o se actualizan datos el campo quede en null
                   ->onDelete('cascade')
                   ->onUpdate('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marcas');
    }
};
