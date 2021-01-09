<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code_name', 'code', 'phone','warehouse','buying','advanced_salary',
    ];
}
