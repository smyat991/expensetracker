<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income_Record extends Model
{
    protected $fillable = [
        'amount', 'user_id', 'income_category_id', 'custom_category_id',
    ];
}
