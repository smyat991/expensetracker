<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income_Record extends Model
{
    protected $fillable = [
        'amount','note','user_id','income_category_id',
    ];
}
