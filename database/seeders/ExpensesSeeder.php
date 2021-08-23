<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Expenses;

class ExpensesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Expenses::create([
        //     'id' => 1,
        //     'nameExpenses' => 'Despesesa Customizada',
        //     'value' => 0,
        //     'state' => 'Despesa Customizada',
        //     'city' => ' ',
        //     'status' => 1,
        //     'category_id' => 1,
        //     'nacional_expense' => 0
        // ]);

        // Expenses::create([
        //     'id' => 2,
        //     'nameExpenses' => 'Alimentação',
        //     'value' => 70,
        //     'state' => 'Despesa Nacional',
        //     'city' => ' ',
        //     'status' => 1,
        //     'category_id' => 2,
        //     'nacional_expense' => 1
        // ]);


        Expenses::create([
            'nameExpenses' => 'KM rodado',
            'value' => 0.8,
            'state' => 'Despesa Nacional',
            'city' => ' ',
            'status' => 1,
            'category_id' => 7,
            'nacional_expense' => 1
        ]);

        Expenses::create([
            'nameExpenses' => 'Traslados',
            'value' => 100,
            'state' => 'Despesa Nacional',
            'city' => ' ',
            'status' => 1,
            'category_id' => 12,
            'nacional_expense' => 1
        ]);

        Expenses::create([
            'nameExpenses' => 'Aluguel de carro',
            'value' => 155,
            'state' => 'Despesa Nacional',
            'city' => ' ',
            'status' => 1,
            'category_id' => 1,
            'nacional_expense' => 1
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 1800,
            'state' => 'AC',
            'city' => 'Rio Branco ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 1500,
            'state' => 'AL',
            'city' => 'Maceió ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 1800,
            'state' => 'AP',
            'city' => 'Macapá ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 2000,
            'state' => 'AM',
            'city' => 'Manaus ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 1500,
            'state' => 'BA',
            'city' => 'Salvador ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 1500,
            'state' => 'CE',
            'city' => 'Fortaleza ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 800,
            'state' => 'DF',
            'city' => 'Brasilia ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 840,
            'state' => 'ES',
            'city' => 'Vitória ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 1000,
            'state' => 'GO',
            'city' => 'Goiânia ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 1500,
            'state' => 'MA',
            'city' => 'São Luiz ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 1750,
            'state' => 'MS',
            'city' => 'Campo Grande ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 1750,
            'state' => 'MT',
            'city' => 'Cuiabá ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 1750,
            'state' => 'PA',
            'city' => 'Belém ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 1650,
            'state' => 'PB',
            'city' => 'João Pessoa ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 1600,
            'state' => 'PE',
            'city' => 'Recife ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 1650,
            'state' => 'PI',
            'city' => 'Terezina ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 1250,
            'state' => 'PR',
            'city' => 'Curitiba ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 600,
            'state' => 'RJ',
            'city' => 'Rio de Janeiro ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 1750,
            'state' => 'RN',
            'city' => 'Natal ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 1820,
            'state' => 'RO',
            'city' => 'Porto Velho ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 1850,
            'state' => 'RR',
            'city' => 'Boa Vista ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 1850,
            'state' => 'RS',
            'city' => 'Porto Alegre ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 1450,
            'state' => 'SC',
            'city' => 'Florianópolis ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 1400,
            'state' => 'SE',
            'city' => 'Aracajú ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 700,
            'state' => 'SP',
            'city' => 'São Paulo ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 900,
            'state' => 'TO',
            'city' => 'Palmas ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Passagem aérea',
            'value' => 1000,
            'state' => 'MG',
            'city' => 'Uberlândia ',
            'status' => 1,
            'category_id' => 8,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 300,
            'state' => 'AC',
            'city' => 'Rio Branco ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 300,
            'state' => 'AL',
            'city' => 'Maceió ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 300,
            'state' => 'AP',
            'city' => 'Macapá ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 300,
            'state' => 'AM',
            'city' => 'Manaus ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 320,
            'state' => 'BA',
            'city' => 'Salvador ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 320,
            'state' => 'CE',
            'city' => 'Fortaleza ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 300,
            'state' => 'DF',
            'city' => 'Brasilia ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 200,
            'state' => 'ES',
            'city' => 'Vitória ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 220,
            'state' => 'ES',
            'city' => 'Vila Velha ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 280,
            'state' => 'ES',
            'city' => 'Aracruz ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 290,
            'state' => 'GO',
            'city' => 'Goiânia ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 275,
            'state' => 'GO',
            'city' => 'Anápolis ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 275,
            'state' => 'GO',
            'city' => 'Rio Verde ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 350,
            'state' => 'MA',
            'city' => 'São Luiz ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 300,
            'state' => 'MS',
            'city' => 'Campo Grande ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 300,
            'state' => 'MT',
            'city' => 'Cuiabá ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 300,
            'state' => 'PA',
            'city' => 'Belém ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 315,
            'state' => 'PB',
            'city' => 'João Pessoa ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 315,
            'state' => 'PE',
            'city' => 'Recife ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 325,
            'state' => 'PI',
            'city' => 'Terezina ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 280,
            'state' => 'PR',
            'city' => 'Curitiba ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 320,
            'state' => 'RJ',
            'city' => 'Rio de Janeiro ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 300,
            'state' => 'RN',
            'city' => 'Natal ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 350,
            'state' => 'RO',
            'city' => 'Porto Velho ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 350,
            'state' => 'RR',
            'city' => 'Boa Vista ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 300,
            'state' => 'RS',
            'city' => 'Porto Alegre ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 310,
            'state' => 'SC',
            'city' => 'Florianópolis ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 290,
            'state' => 'SE',
            'city' => 'Aracajú ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 300,
            'state' => 'SP',
            'city' => 'São Paulo ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 220,
            'state' => 'SP',
            'city' => 'Indaiatuba ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 280,
            'state' => 'SP',
            'city' => 'Campinas ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 195,
            'state' => 'SP',
            'city' => 'Guarulhos ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 220,
            'state' => 'SP',
            'city' => 'Santa Bárbara do Oeste ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 280,
            'state' => 'TO',
            'city' => 'Palmas ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 275,
            'state' => 'MG',
            'city' => 'Uberlândia ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 250,
            'state' => 'MG',
            'city' => 'Belo Horizonte ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 220,
            'state' => 'MG',
            'city' => 'Ouro Branco ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 220,
            'state' => 'MG',
            'city' => 'Ipatinga ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 250,
            'state' => 'MG',
            'city' => 'Curvelo ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 250,
            'state' => 'MG',
            'city' => 'Juiz de Fora ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);

        Expenses::create([
            'nameExpenses' => 'Hospedagem',
            'value' => 220,
            'state' => 'MG',
            'city' => 'Lavras ',
            'status' => 1,
            'category_id' => 6,
            'nacional_expense' => 0
        ]);
    }
}
