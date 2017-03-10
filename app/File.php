<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['name', 'size', 'type', 'version', 'branch_id'];
    
    public function branch(){
        return $this->belongsTo(Branch::class);
    }
}
