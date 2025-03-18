<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    public function category()
    {
        return $this->hasOne(Category::class, 'category_id');
    }
}
