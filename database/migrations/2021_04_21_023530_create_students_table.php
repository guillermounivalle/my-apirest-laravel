<?php

/**
 * Esta tabla se creó usando "Artisan" (CLI comandos Laravel)
 * para crear se usa el comando:   php artisan make:model --nombre_tabla-- -a
 * 
 * En la carpeta migartios, laravel nos trae la migración de la tabla creada
 * 
 * Los métodos públicos que encontramos nos permite crear la tabla o eliminarla
 * Dentro del método podemos crear las columnas que va a tener la tabla
 * 
 * Cada vez que se haga una migración, hay que correrla. Para ello usamos
 * php artisan migrate
 */



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            //Creamos las columnas de la tabla. (Las anteriores estaban por defecto)
            //A la columna le podemos decir que sea nullable o unique
            //No es necesario definirlo como columna
            $table->string('name')->unique();
            $table->boolean('active')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}


            