<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Expense_Category extends Model
{
    protected $fillable = [
        'category_name',
    ];

     public function expense_record()
    {
        return $this->hasmany('App\Expense_Record');
    }
}

