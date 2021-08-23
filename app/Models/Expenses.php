<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expenses extends Model
{
    protected $table = 'expenses';
    public $timestamps = true;

    protected $fillable = [
        'category_id',
        'nameExpenses',
        'value',
        'state',
        'city',
        'status',
        'nacional_expense',
    ];

    public function category()
    {
        return $this->BelongsTo(expensesCategory::class);
    }

    public function part_numbers()
    {
        return $this->belongsToMany(PartNumbers::class, 'partnumber_expenses', 'expense_id', 'part_number_id');
    }

    public function quotes()
    {
        return $this->belongsToMany(Quote::class,'quote_expenses','expense_id','quote_id');

    }

    public function rules()
    {
        return [
            'category' => 'required',
            'nameExpenses' => 'required',
            'value' => 'required',
        ];
    }



    // public function messages(){

    //     return [
    //       'category_id.required' => 'A categoria deve ser preenchida.',
    //       'nameExpenses.required' => 'Nome da despesa deve ser preenchido.',
    //       'value.required' => 'Campo valor deve ser preenchido!',
    //     ];
    // }

}
