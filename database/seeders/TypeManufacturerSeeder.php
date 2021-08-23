<?php

namespace Database\Seeders;
use App\Models\TypeManufacturer;

use Illuminate\Database\Seeder;

class TypeManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TypeManufacturer::create([
        //     'name'=>'Tipo 1'
        // ]);

        // TypeManufacturer::create([
        //     'name'=>'Tipo 2'
        // ]);

        $TypeManufacturer = new TypeManufacturer;
        $TypeManufacturer->name = "Tipo 1";
        $TypeManufacturer->save();
    }
}
