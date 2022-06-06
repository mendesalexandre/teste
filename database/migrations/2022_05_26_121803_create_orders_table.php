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
        Schema::create('ordem_servico', function (Blueprint $table) {
            $table->id();
            $table->boolean('E')->default(false);
            $table->foreignId('cliente_id')->constrained('users', 'id');
            $table->foreignId('funcionario_id')->constrained('users', 'id');
            $table->longText('descricao')->nullable();
            $table->dateTime('data_entrada')->default(now());
            $table->dateTime('data_finalizacao')->nullable();
            $table->dateTime('data_entrega')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
