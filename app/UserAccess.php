<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAccess extends Model
{ 
    public $table='user_access';
    const FULL_ADMIN_ACCESS_ID = 1;
    const ADMIN_ACCESS_ID = 2;
    const GUEST_ACCESS_ID = 3;
    public static function getFullAdminId(){
        return self::where('name', self::FULL_ADMIN_ACCESS_ID)->pluck('id')->first();
    }
    public static function getAdminId(){
        return self::where('name', self::ADMIN_ACCESS_ID)->pluck('id')->first();
    }
    public static function getGuestId(){
        return self::where('name', self::GUEST_ACCESS_ID)->pluck('id')->first();
    }
}