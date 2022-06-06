<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return Tenant::create([
            'name' => 'Master',
            'sub_domain' => 'master',
            'domain' => 'laboratorio.com.br',
            'cpf_cnpj' => '11111111111111'
        ]);
    }
}
