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
        Schema::create('servicos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('quantidade')->nullable();
            $table->integer('tabela_geral_id')->index();
            $table->integer('grupo_servico_id')->index()->nullable();;
            $table->decimal('valor_base_calculo')->nullable();
            $table->decimal('valor_emolumentos')->nullable();
            $table->decimal('valor_issqn')->nullable();
            $table->decimal('valor_registro_civil')->nullable();
            $table->decimal('valor_fundo_judiciario')->nullable();
            $table->decimal('valor_subtotal')->nullable();
            $table->decimal('valor_total')->nullable();
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
        Schema::dropIfExists('servicos');
    }
};
