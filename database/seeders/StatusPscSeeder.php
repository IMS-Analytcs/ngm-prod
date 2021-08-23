<?php

namespace Database\Seeders;

use App\Models\StatusPsc;
use Illuminate\Database\Seeder;

class StatusPscSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusPsc::create([
            'description' => 'Aguardando Informação Pre-venda'
        ]);

        StatusPsc::create([
            'description' => 'Aguardando Informação Gerente de contas'
        ]);

        StatusPsc::create([
            'description' => 'Aguardando Retorno Parceiro'
        ]);

        StatusPsc::create([
            'description' => 'Em andamento'
        ]);

        StatusPsc::create([
            'description' => 'Concluído'
        ]);

        StatusPsc::create([
            'description' => 'Indevido'
        ]);
    }
}
