<?php

namespace Database\Seeders;

use App\Models\Servico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicos = [
            [
                'id' => 1,
                'grupo_servico_id' => 1, // Especifica se é RI ou TD, ou Tabelionato ou RC
                'tabela_geral_id' => 1,
                'nome' => 'Escritura Pública de Compra e Venda',
                'quantidade' => null,
                'valor_base_calculo' => null,
                'valor_emolumentos' => null,
                'valor_issqn' => null,
                'valor_registro_civil' => null,
                'valor_fundo_judiciario' => null,
                'valor_subtotal' => null,
                'valor_total' => null
            ],
            [
                'id' => 2,
                'nome' => 'Contrato de Compra e Venda com Alienação Fiduciária',
                'quantidade' => null,
                'tabela_geral_id' => 1,
                'valor_base_calculo' => null,
                'valor_emolumentos' => null,
                'valor_issqn' => null,
                'valor_registro_civil' => null,
                'valor_fundo_judiciario' => null,
                'valor_subtotal' => null,
                'valor_total' => null
            ],
            [
                'id' => 3,
                'nome' => 'Contrato de Compra e Venda com Alienação Fiduciária',
                'quantidade' => null,
                'tabela_geral_id' => 2,
                'valor_base_calculo' => null,
                'valor_emolumentos' => null,
                'valor_issqn' => null,
                'valor_registro_civil' => null,
                'valor_fundo_judiciario' => null,
                'valor_subtotal' => null,
                'valor_total' => null
            ],
            [
                'id' => 4,
                'nome' => 'Contrato de Compra e Venda com Alienação Fiduciária',
                'quantidade' => null,
                'tabela_geral_id' => 1,
                'valor_base_calculo' => null,
                'valor_emolumentos' => null,
                'valor_issqn' => null,
                'valor_registro_civil' => null,
                'valor_fundo_judiciario' => null,
                'valor_subtotal' => null,
                'valor_total' => null
            ],
            [
                'id' => 5,
                'nome' => 'Contrato de Compra e Venda com Alienação Fiduciária',
                'quantidade' => null,
                'tabela_geral_id' => 1,
                'valor_base_calculo' => null,
                'valor_emolumentos' => null,
                'valor_issqn' => null,
                'valor_registro_civil' => null,
                'valor_fundo_judiciario' => null,
                'valor_subtotal' => null,
                'valor_total' => null
            ],
            [
                'id' => 6,
                'nome' => 'Contrato de Compra e Venda com Alienação Fiduciária',
                'quantidade' => null,
                'tabela_geral_id' => 1,
                'valor_base_calculo' => null,
                'valor_emolumentos' => null,
                'valor_issqn' => null,
                'valor_registro_civil' => null,
                'valor_fundo_judiciario' => null,
                'valor_subtotal' => null,
                'valor_total' => null
            ]
        ];
        foreach ($servicos as $servico) {
            Servico::create($servico);
        }
    }
}
