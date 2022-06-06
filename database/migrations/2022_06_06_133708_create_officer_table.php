<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officer', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_active');
            $table->string('name'); // NOME
            $table->string('job_title'); // CARGO
            $table->date('start_date')->nullable(); // Data Inicial da Posse
            $table->date('end_date')->nullable(); // Data Final da Posse
            $table->string('ordinance'); // Arquivo de Termo de Posse/Portaria/Decisão Judicial.
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
        Schema::dropIfExists('officer');
    }
};
