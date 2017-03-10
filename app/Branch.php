<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = ['company', 'type', 'user_id', 'city', 'street'];

    public function file(){
        return $this->hasMany(File::class);
    }
    
    public function fileList(){
        return $this->hasMany(File_list::class);
    }
    
}
