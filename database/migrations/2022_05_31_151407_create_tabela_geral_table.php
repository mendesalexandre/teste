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
        Schema::create('tabela_geral', function (Blueprint $table) {
            $table->id();
            // codigo_tj, descricao, judiciario,
            // associacoes, valor_servico, valor_maximo, valor_incremento,
            // valor_gatilho, valor_gatilho_inicial, valor_gatilho_final, ato_correlacionado, perc_issqn
            $table->integer('codigo_tj')->index()->nullable();
            $table->string('descricao');

            // VALORES
            $table->decimal('valor_servico')->default(0);
            $table->decimal('valor_maximo')->default(0);
            $table->decimal('valor_incremento')->default(0);
            $table->decimal('valor_gatilho')->default(0);
            $table->decimal('valor_gatilho_inicial')->default(0);
            $table->decimal('valor_gatilho_final')->default(0);
            $table->decimal('aliquota_issqn')->default(0);

            // BOLEANOS
            $table->boolean('has_registro_civil')->default(false);
            $table->boolean('has_fundo_jucidiciario')->default(false);
            $table->boolean('judiciario')->default(false);
            $table->boolean('associacoes')->default(false);
            $table->boolean('is_ato_correlacionado')->default(false);
            $table->boolean('ato_correlacionado')->default(false);

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
        Schema::dropIfExists('tabela_geral');
    }
};
