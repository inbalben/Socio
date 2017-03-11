<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function usersACL(){
        return $this->hasMany(Users_ACL::class);
    }
    
 
    public function hasPermission($slug){
        $user = Auth::user();
        $userACL = Users_ACL::where('user_id', '=', $user->id)->get();
        foreach($userACL as $acl){
            if($acl->acl_slug == $slug){
                return true;
            }
        }
        return false;
    }
}
