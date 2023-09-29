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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id('idvehiculo');
            $table->string('placa', 8);
            $table->string('observaciones', 500);
            //llaves foraneas 



            //estado
            $table->unsignedBigInteger('estado_id')-> unique();
            
            //Restricciones de la llave foranea 
            $table->foreign('estado_id')
                  ->references('idestado')
                  -> on('estados')
                    // Cascada significa: que si se borran o se actualizan datos hayan cambios en las dos tablas 
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            //usuario
            $table->unsignedBigInteger('usuario_id')-> unique();
            
            //Restricciones de la llave foranea 
            $table->foreign('usuario_id')
                ->references('idusuario')
                -> on('usuarios')
                // Cascada significa: que si se borran o se actualizan datos hayan cambios en las dos tablas 
                ->onDelete('cascade')
                ->onUpdate('cascade');


                
            //marca
            $table->unsignedBigInteger('marca_id')-> unique();
            
            //Restricciones de la llave foranea 
            $table->foreign('marca_id')
                ->references('idmarca')
                -> on('marcas')
                // Cascada significa: que si se borran o se actualizan datos hayan cambios en las dos tablas 
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
        Schema::dropIfExists('vehiculos');
    }
};
