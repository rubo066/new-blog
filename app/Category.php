<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'category';
    public function cuisine(){
        return $this->hasOne(Cuisine::class, 'id', 'cuisine_id');
    }

}
