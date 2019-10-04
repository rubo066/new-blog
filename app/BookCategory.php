<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    public function category(){
        return $this->hasOne(Category::class,'id', 'category_id');
    }
}
