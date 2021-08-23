<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BU;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BU::create([
            'name' => 'CORE',
            'description' => 'CORE',
            'ativo' => 1,
            'type_id' => 1
        ]);

        BU::create([
            'name' => 'VMWARE',
            'description' => 'VMWARE',
            'ativo' => 1,
            'type_id' => 1
        ]);

        BU::create([
            'name' => 'ORACLE',
            'description' => 'ORACLE',
            'ativo' => 1,
            'type_id' => 1
        ]);
    }
}
