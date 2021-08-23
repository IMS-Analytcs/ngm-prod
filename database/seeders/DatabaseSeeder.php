<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(Type_buSeeder::class);
        $this->call(TypeManufacturerSeeder::class);
        $this->call(ManufactureSeeder::class);
        $this->call(OperationalCostSeeder::class);
        $this->call(ExpensesCategorySeeder::class);
        $this->call(PartnumberTypeSeeder::class);
        $this->call(GroupsSeeder::class);
        $this->call(FamiliaSeeder::class);
        $this->call(BusSeeder::class);
        $this->call(PartnumberSeeder::class);
        $this->call(ExpensesSeeder::class);
        $this->call(PartNumberUpdateSOWSeeder::class);
        // $this->call(StatusPscSeeder::class);
    }
}
