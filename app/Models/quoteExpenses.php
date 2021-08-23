<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quoteExpenses extends Model
{
    use HasFactory;

    protected $table = 'quote_expenses';

    protected $fillable = [
        'quote_id',
        'expense_id',
        'unity_value',
        'quantity',
        'partnumber_id'
    ];

}