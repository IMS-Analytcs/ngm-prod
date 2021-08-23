<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;


    protected $fillable = [
        'state',
        'city',
        'client_name',
        'lead',
        'account_manager',
        'status',
        'owner',
        'initial_value',
        'final_value',
        'final_date',

    ];

    //Relacionamentos
    public function part_numbers()
    {
        return $this->belongsToMany(PartNumbers::class,'part_number_quote','quote_id','part_number_id')->withPivot('unity_value', 'quantity');

    }

    public function expenses()
    {
        return $this->belongsToMany(Expenses::class,'quote_expenses','quote_id','expense_id')->withPivot('unity_value', 'quantity');

    }


    //validações
    public function rules()
    {
        return [
            'state' => 'required',
            'city' => 'required',
            'client_name' => 'required',
            'lead' => 'required',
            'account_manager' => 'required',
            'owner' => 'required'
        ];

    }}


