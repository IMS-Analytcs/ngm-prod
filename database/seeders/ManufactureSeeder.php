<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Manufacturer;

class ManufactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manufacturer::create([
            'name' => 'DELL',
            'active' => false,
            'typemanufacturer_id' => 1,
            'abbreviation' => 'DELL',
            'partnership_level' => 'Nível 1',
            'detailing' => '',
            'contract_start' => '2021-01-01',
            'contract_end' => '2022-01-01'
        ]);

        Manufacturer::create([
            'name' => 'EMC',
            'active' => false,
            'typemanufacturer_id' => 1,
            'abbreviation' => 'EMC',
            'partnership_level' => 'Nível 1',
            'detailing' => '',
            'contract_start' => '2021-01-01',
            'contract_end' => '2022-01-01'
        ]);

        Manufacturer::create([
            'name' => 'ITPS',
            'active' => true,
            'typemanufacturer_id' => 1,
            'abbreviation' => 'ITPS',
            'partnership_level' => 'Nível 1',
            'detailing' => '',
            'contract_start' => '2021-01-01',
            'contract_end' => '2022-01-01'
        ]);

        Manufacturer::create([
            'name' => 'ORACLE',
            'active' => true,
            'typemanufacturer_id' => 1,
            'abbreviation' => 'ORCL',
            'partnership_level' => 'Nível 1',
            'detailing' => '',
            'contract_start' => '2021-01-01',
            'contract_end' => '2022-01-01'
        ]);

        Manufacturer::create([
            'name' => 'REDHAT',
            'active' => true,
            'typemanufacturer_id' => 1,
            'abbreviation' => 'RH',
            'partnership_level' => 'Nível 1',
            'detailing' => '',
            'contract_start' => '2021-01-01',
            'contract_end' => '2022-01-01'
        ]);

        Manufacturer::create([
            'name' => 'SOLARWINDS',
            'active' => false,
            'typemanufacturer_id' => 1,
            'abbreviation' => 'SW',
            'partnership_level' => 'Nível 1',
            'detailing' => '',
            'contract_start' => '2021-01-01',
            'contract_end' => '2022-01-01'
        ]);

        Manufacturer::create([
            'name' => 'SYMANTEC',
            'active' => false,
            'typemanufacturer_id' => 1,
            'abbreviation' => 'SYM',
            'partnership_level' => 'Nível 1',
            'detailing' => '',
            'contract_start' => '2021-01-01',
            'contract_end' => '2022-01-01'
        ]);

        Manufacturer::create([
            'name' => 'TREND',
            'active' => false,
            'typemanufacturer_id' => 1,
            'abbreviation' => 'TM',
            'partnership_level' => 'Nível 1',
            'detailing' => '',
            'contract_start' => '2021-01-01',
            'contract_end' => '2022-01-01'
        ]);

        Manufacturer::create([
            'name' => 'VMWARE',
            'active' => true,
            'typemanufacturer_id' => 1,
            'abbreviation' => 'VM',
            'partnership_level' => 'Nível 1',
            'detailing' => '',
            'contract_start' => '2021-01-01',
            'contract_end' => '2022-01-01'
        ]);

        Manufacturer::create([
            'name' => 'CISCO',
            'active' => true,
            'typemanufacturer_id' => 1,
            'abbreviation' => 'CISCO',
            'partnership_level' => 'Nível 1',
            'detailing' => '',
            'contract_start' => '2021-01-01',
            'contract_end' => '2022-01-01'
        ]);

        Manufacturer::create([
            'name' => 'BROCADE',
            'active' => false,
            'typemanufacturer_id' => 1,
            'abbreviation' => 'BRO',
            'partnership_level' => 'Nível 1',
            'detailing' => '',
            'contract_start' => '2021-01-01',
            'contract_end' => '2022-01-01'
        ]);

        Manufacturer::create([
            'name' => 'MICROSOFT',
            'active' => true,
            'typemanufacturer_id' => 1,
            'abbreviation' => 'MSFT',
            'partnership_level' => 'Nível 1',
            'detailing' => '',
            'contract_start' => '2021-01-01',
            'contract_end' => '2022-01-01'
        ]);

        Manufacturer::create([
            'name' => 'F5',
            'active' => true,
            'typemanufacturer_id' => 1,
            'abbreviation' => 'F5',
            'partnership_level' => 'Nível 1',
            'detailing' => '',
            'contract_start' => '2021-01-01',
            'contract_end' => '2022-01-01'
        ]);

        Manufacturer::create([
            'name' => 'PALO ALTO',
            'active' => true,
            'typemanufacturer_id' => 1,
            'abbreviation' => 'PAL',
            'partnership_level' => 'Nível 1',
            'detailing' => '',
            'contract_start' => '2021-01-01',
            'contract_end' => '2022-01-01'
        ]);

        Manufacturer::create([
            'name' => 'FORCEPOINT',
            'active' => false,
            'typemanufacturer_id' => 1,
            'abbreviation' => 'FORCE',
            'partnership_level' => 'Nível 1',
            'detailing' => '',
            'contract_start' => '2021-01-01',
            'contract_end' => '2022-01-01'
        ]);

        Manufacturer::create([
            'name' => 'AIRWATCH',
            'active' => false,
            'typemanufacturer_id' => 1,
            'abbreviation' => 'AIR',
            'partnership_level' => 'Nível 1',
            'detailing' => '',
            'contract_start' => '2021-01-01',
            'contract_end' => '2022-01-01'
        ]);

        Manufacturer::create([
            'name' => 'VEEAM',
            'active' => true,
            'typemanufacturer_id' => 1,
            'abbreviation' => 'VEEAM',
            'partnership_level' => 'Nível 1',
            'detailing' => '',
            'contract_start' => '2021-01-01',
            'contract_end' => '2022-01-01'
        ]);

        Manufacturer::create([
            'name' => 'COMMVAULT',
            'active' => false,
            'typemanufacturer_id' => 1,
            'abbreviation' => 'CV',
            'partnership_level' => 'Nível 1',
            'detailing' => '',
            'contract_start' => '2021-01-01',
            'contract_end' => '2022-01-01'
        ]);

        Manufacturer::create([
            'name' => 'PURE',
            'active' => true,
            'typemanufacturer_id' => 1,
            'abbreviation' => 'PURE',
            'partnership_level' => 'Nível 1',
            'detailing' => '',
            'contract_start' => '2021-01-01',
            'contract_end' => '2022-01-01'
        ]);

        Manufacturer::create([
            'name' => 'DELL EMC',
            'active' => true,
            'typemanufacturer_id' => 1,
            'abbreviation' => 'DELL EMC',
            'partnership_level' => 'Nível 1',
            'detailing' => '',
            'contract_start' => '2021-01-01',
            'contract_end' => '2022-01-01'
        ]);

        Manufacturer::create([
            'name' => 'DYNATRACE',
            'active' => true,
            'typemanufacturer_id' => 1,
            'abbreviation' => 'DYNATRACE',
            'partnership_level' => 'Nível 1',
            'detailing' => '',
            'contract_start' => '2021-01-01',
            'contract_end' => '2022-01-01'
        ]);

        Manufacturer::create([
            'name' => 'AWS',
            'active' => true,
            'typemanufacturer_id' => 1,
            'abbreviation' => 'AWS',
            'partnership_level' => 'Nível 1',
            'detailing' => '',
            'contract_start' => '2021-01-01',
            'contract_end' => '2022-01-01'
        ]);

      
    }
}
