<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('typeid');
            $table->string('identity');
            $table->string('name');
            $table->string('lastname');
            $table->string('phone');
            $table->enum('profile',['Profesional','Tecnico','Tecnologo','Bachiller','Auxiliar','Sin Estudios']);
            $table->string('observations');
            $table->string('patch');
            $table->foreignId('profession_id')->constrained('professions');
            $table->foreignId('companie_id')->constrained('companies');
            $table->foreignId('citie_id')->constrained('cities');
            $table->foreignId('reception_id')->constrained('receptions');
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
        Schema::dropIfExists('employees');
    }
}
