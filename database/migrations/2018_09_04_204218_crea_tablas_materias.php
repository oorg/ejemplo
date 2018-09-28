<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaTablasMaterias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('materia');
            $table->string('crn', 20);
            $table->time('hora_inicio');
            $table->timestamps();
          
          /*
            $table->increments('id');
            $table->integer('nombre_materia')->unsigned();
            $table->string('crn', 10);
            $table->string('secction', 5);
            $table->string('horario');
            $table->timestamps();
          */
        });
    }

 /*
 Insertar en la tabla
 INSERT INTO materias (user_id, materia, crn, hora_inicio, created_at, updated_at) 
 VALUES ('1', 'materia1', 'crn1', '15:00', now(), now());
 */
  
  
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materias');
    }
}
