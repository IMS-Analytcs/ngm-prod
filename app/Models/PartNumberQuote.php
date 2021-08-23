<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartNumberQuote extends Model
{
    use HasFactory;

    protected $table = 'part_number_quote';

    protected $fillable = [
        'quote_id',
        'part_number_id',
        'quantity',
        'unity_value'
    ];


    public function rules(){
        return [
          'quote_id' => 'required',
          'part_number_id' => 'required',
          'quantity' => 'required'
        ];
    }

}
