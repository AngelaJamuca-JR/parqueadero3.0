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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('idusuario');
            $table->string('nombre', 50);
            $table->string('telefono', 20);
            $table->string('apellido', 50);
            //$table->rememberToken();

            //tipo usuario
             //Rferencia a la otra tabla  del mismo tipo (integer)
             $table->unsignedBigInteger('tipousuario_id')-> unique();
 
             //Restricciones de la llave foranea 
             $table->foreign('tipousuario_id')
                   ->references('idtipousuario')
                   -> on('tipousuarios')
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
        Schema::dropIfExists('usuarios');
    }
};
