<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
   protected $fillable = ['name', 'slug'];
   
    public function usersAcl(){
        return $this->hasMany(Users_ACL::class);
    }
}
