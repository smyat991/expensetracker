<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense_Record extends Model
{
    protected $fillable = [
        'amount', 'user_id', 'expense_category_id', 'custom_category_id',
    ];
}
