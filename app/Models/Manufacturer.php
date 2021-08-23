<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'active',
        'typemanufacturer_id',
        'abbreviation',
        'partnership_level',
        'detailing',
        'contract_start',
        'contract_end',
    ];

    public function group()
    {
        return $this->hasMany(Group::class);
    }

    //validações
    public function rules()
    {
        return [
            'name' => 'required',
            'typemanufacturer_id' => 'required',
            'abbreviation' => 'required',
            'partnership_level' => 'required',
            'detailing' => 'required',
            'contract_start' => 'required',
            'contract_end' => 'required',
        ];
    }
}