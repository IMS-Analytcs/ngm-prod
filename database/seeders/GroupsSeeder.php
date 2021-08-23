<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        Group::create([
            'manufacturer_id' => 1,
            'name' => 'Grupo 1',
            'description' => 'Grupo 1',
            'active' => 1
        ]);
    }
}
