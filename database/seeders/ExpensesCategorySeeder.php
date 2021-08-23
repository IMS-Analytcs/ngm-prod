<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\expensesCategory;

class ExpensesCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        expensesCategory::create([
            'category' => 'Aluguel de carro',        
        ]);

        expensesCategory::create([
            'category' => 'Alimentação',        
        ]);

        expensesCategory::create([
            'category' => 'Combustível',        
        ]);

        expensesCategory::create([
            'category' => 'Diária',        
        ]);

        expensesCategory::create([
            'category' => 'Exame / Mobilização',        
        ]);

        expensesCategory::create([
            'category' => 'Hospedagem',        
        ]);

        expensesCategory::create([
            'category' => 'KM rodado',        
        ]);

        expensesCategory::create([
            'category' => 'Passagem aérea',        
        ]);

        expensesCategory::create([
            'category' => 'Passagem terrestre',        
        ]);

        expensesCategory::create([
            'category' => 'Pedágio',        
        ]);


        expensesCategory::create([
            'category' => 'Taxi / Uber',        
        ]);

        expensesCategory::create([
            'category' => 'Traslados',        
        ]);
     

    }
}
