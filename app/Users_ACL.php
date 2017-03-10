<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_ACL extends Model
{
     protected $fillable = ['user_id', 'acl_slug'];
     
     
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function permission(){
        return $this->belongsTo(Permission::class);
    }
}
