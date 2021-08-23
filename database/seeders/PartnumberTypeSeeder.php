<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\typePartnumber;

class PartnumberTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        typePartnumber::create([
            'id' => 1 ,
            'type' => 'Serviços Especializados',
            'description' => 'ps',
            'status' => 1,
        ]);

        typePartnumber::create([
            'id' => 2,
            'type' => 'Project Manager',
            'description' => 'pm',
            'status' => 1,
        ]);

        typePartnumber::create([
            'id' => 3 ,
            'type' => 'Managed Services',
            'description' => '',
            'status' => 1,
        ]);

        typePartnumber::create([
            'id' => 4,
            'type' => 'Education',
            'description' => 'ec',
            'status' => 1,
        ]);

        typePartnumber::create([
            'id' =>  5,
            'type' => 'Despesas de ISE',
            'description' => 'dp',
            'status' => 1,
        ]);

        typePartnumber::create([
            'id' => 6,
            'type' => 'Hybrid Cloud',
            'description' => '',
            'status' => 1,
        ]);

        typePartnumber::create([
            'id' => 7,
            'type' => 'Technical Account Manager',
            'description' => 'tam',
            'status' => 1,
        ]);

        typePartnumber::create([
            'id' => 8 ,
            'type' => 'Despesas de IPM',
            'description' => 'dp2',
            'status' => 1,
        ]);

        typePartnumber::create([
            'id' => 9,
            'type' => 'Despesas de TAM',
            'description' => 'dp3',
            'status' => 1,
        ]);


        typePartnumber::create([
            'id' => 10,
            'type' => 'Despesas de IMS',
            'description' => 'dp4',
            'status' => 1,
        ]);


    }
}
