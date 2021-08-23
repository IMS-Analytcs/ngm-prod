<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'manufacturer_id',
        'active',
        'description',
    ];

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    //validações
    public function rules()
    {
        return [
            'name' => 'required',
            'manufacturer_id' => 'required',
            'description' => 'required',
        ];
    }
}