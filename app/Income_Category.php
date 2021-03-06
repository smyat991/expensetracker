<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income_Category extends Model
{
    protected $fillable = [
        'category_name',
    ];

    public function income_record()
    {
        return $this->hasmany('App\Income_Record');
    }

    
}
