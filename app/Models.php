<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    public function makes(){
        return $this->hasOne(makes::class, 'id', 'make_id');
    }
}
