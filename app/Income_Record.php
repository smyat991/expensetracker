<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income_Record extends Model
{
    protected $fillable = [
        'amount','date', 'note','user_id','income_category_id',
    ];

    public function income_category()
    {
        return $this->belongsTo('App\Income_Category');
    }
}
