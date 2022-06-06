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
        Schema::create('ordem_servico_item', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ordem_servico_id')->constrained('ordem_servico', 'id');
            $table->foreignId('servico_id')->constrained('servicos', 'id');
            $table->string('arquivo')->nullable();
            $table->integer('quantidade')->nullable();
            $table->decimal('valor_emolumentos')->default(0);
            $table->decimal('valor_issqn')->default(0);
            $table->decimal('valor_desconto')->default(0);
            $table->decimal('valor_subtotal')->default(0);
            $table->decimal('valor_total')->default(0);
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
        Schema::dropIfExists('order_item');
    }
};
