<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use Notifiable;
    const FULL_ADMIN_NAME = 'full_admin'; 
    const ADMIN_NAME = 'admin'; 
    const GUEST_NAME = 'guest'; 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'user_access_id'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // public function posts(){
    //     return $this->hasMany(Posts::class);
    // }
    // public function profile(){
    //     return $this->hasOne(Profiles::class,'user_id','');
    // }
    // public function setFullNameAttribute(){
    //     return $this->first_name . ' ' . $this->last_name;
    // }
    // public function aaa(){
    //     echo $this->name;
    // }
    public function getAccess(){
        return $this->hasOne(UserAccess::class, 'id', 'user_access_id');
    }
    public function isFullAdmin(){
        if($this->getAccess()->pluck('name')->first() == self::FULL_ADMIN_NAME){
            return true;
        }
        return false;
    }
    public function isAdmin(){
        if($this->getAccess()->pluck('name')->first() == self::ADMIN_NAME){
            return true;
        }
        return false;
    }
    public function isGuest(){
        if($this->getAccess()->pluck('name')->first() == self::GUEST_NAME){
            return true;
        }
        return false;
    }
}