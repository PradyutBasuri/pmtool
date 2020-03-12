<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tbl_questions extends Model
{
    protected $table='tbl_questions';
    protected $fillable=['project_id','question_description','employee_id', 'created_at','updated_at','deleted_at'];
}
