<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File_list extends Model
{
     protected $fillable = ['branch_id', 'status', 'list'];
}
