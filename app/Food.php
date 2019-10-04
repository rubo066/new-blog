<?php

namespace App;
use App\Food;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public $table = 'food';
    public function cuisine(){
        return $this->hasOne(Cuisine::class, 'id', 'cuisine_id');
    }

}
