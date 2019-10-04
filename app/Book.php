<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function bookCategory(){
        return $this->hasMany(BookCategory::class,'book_id', 'id');
    }
}
