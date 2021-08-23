<?php

namespace Database\Seeders;

use App\Models\Type_bu;
use Illuminate\Database\Seeder;

class Type_buSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type_bu::create([
            'Type' => 'Devops',
        ]);

        Type_bu::create([
            'Type' => 'Governança',
        ]);

        Type_bu::create([
            'Type' => 'Gestão de Ativos',
        ]);

        Type_bu::create([
            'Type' => 'Gestão de Eventos',
        ]);

        Type_bu::create([
            'Type' => 'Armazenamento',
        ]);

        Type_bu::create([
            'Type' => 'Proteção de Dados',
        ]);

        Type_bu::create([
            'Type' => 'Banco de Dados',
        ]);

        Type_bu::create([
            'Type' => 'Gestão de Estoque',
        ]);

        Type_bu::create([
            'Type' => 'Linux e Middleware',
        ]);

        Type_bu::create([
            'Type' => 'Microsoft',
        ]);

        Type_bu::create([
            'Type' => 'Mobile e EUC',
        ]);

        Type_bu::create([
            'Type' => 'Monitoramento',
        ]);
        Type_bu::create([
            'Type' => 'Redes e Segurança',
        ]);
        Type_bu::create([
            'Type' => 'Virtualização',
        ]);
        Type_bu::create([
            'Type' => 'Cloud Services',
        ]);

    }
}