<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tbl_replys extends Model
{
    protected $table='tbl_replys';
    protected $fillable=['question_id','project_id','user_id','message', 'created_at','updated_at'];
    
}
