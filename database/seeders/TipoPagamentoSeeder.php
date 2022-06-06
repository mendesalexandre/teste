<?php

namespace Database\Seeders;

use App\Models\TipoPagamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoPagamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pagamentos = [
            ['nome' => 'Dinheiro', 'descricao' => 'Pagamento à Vista'],
            ['nome' => 'Boleto', 'descricao' => 'Pagamento por Boleto'],
            ['nome' => 'Pix', 'descricao' => 'Pagamento por Pix'],
            ['nome' => 'TED(Transferência Eletrônica Disponível)', 'descricao' => 'Pagamento por TED'],
            ['nome' => 'DOC(Documento de Crédito)', 'descricao' => 'Pagamento por DOC'],
            ['nome' => 'Cartão de Crédito', 'descricao' => 'Pagamento por Cartão de Crédito'],
            ['nome' => 'Cartão de Débito', 'descricao' => 'Pagamento por Cartão de Débito'],
            ['nome' => 'Cheque', 'descricao' => 'Pagamento por Cheque'],
            ['nome' => 'Cheque Pré Datado', 'descricao' => 'Pagamento por Pré Datado'],
        ];

        foreach ($pagamentos as $pagamento) {
            TipoPagamento::create($pagamento);
        }
        //
    }
}
