<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartNumbers extends Model
{
    protected $table = 'part_number';
    public $timestamps = true;

     //Relacionamentos
     public function quotes()
     {
         return $this->belongsToMany(Quotes::class,'part_number_quote','part_number_id','quote_id')->withPivot('unity_value', 'quantity');
     }

     public function catexpenses()
     {
         return $this->belongsToMany(expensesCategory::class,'partnumber_expenses','part_number_id','expense_id');

     }
     public function expenses(){
        return $this->belongsToMany(Expenses::class,'partnumber_expenses','part_number_id','expense_id')->withPivot('quantity', 'type');
     }
}
