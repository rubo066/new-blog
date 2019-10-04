<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuisine extends Model
{
    public $table = 'cuisine';
    public function food(){
        return $this->hasMany(Food::class, 'cuisine_id', 'id');
    }
}
