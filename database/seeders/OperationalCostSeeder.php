<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OperationalCost;

class OperationalCostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  

        $OperationalCost = new OperationalCost;
        $OperationalCost->level = "J";
        $OperationalCost->type = "ANL";
        $OperationalCost->cost_hour = 153.85;
        $OperationalCost->save();

        $OperationalCost = new OperationalCost;
        $OperationalCost->level = "P";
        $OperationalCost->type = "ANL";
        $OperationalCost->cost_hour = 248.40;
        $OperationalCost->save();

        $OperationalCost = new OperationalCost;
        $OperationalCost->level = "M";
        $OperationalCost->type = "ANL";
        $OperationalCost->cost_hour = 447.12;
        $OperationalCost->save();

        $OperationalCost = new OperationalCost; 
        $OperationalCost->level = "S";
        $OperationalCost->type = "ANL";
        $OperationalCost->cost_hour = 347.76;
        $OperationalCost->save();

        $OperationalCost = new OperationalCost;
        $OperationalCost->level = "J";
        $OperationalCost->type = "IPM";
        $OperationalCost->cost_hour = 88.99;
        $OperationalCost->save();

        $OperationalCost = new OperationalCost;
        $OperationalCost->level = "P";
        $OperationalCost->type = "IPM";
        $OperationalCost->cost_hour = 195.41;
        $OperationalCost->save();

        $OperationalCost = new OperationalCost;
        $OperationalCost->level = "M";
        $OperationalCost->type = "IPM";
        $OperationalCost->cost_hour = 410.68;
        $OperationalCost->save();

        $OperationalCost = new OperationalCost; 
        $OperationalCost->level = "S";
        $OperationalCost->type = "IPM";
        $OperationalCost->cost_hour = 259.99;
        $OperationalCost->save();

      
        
    }
}
