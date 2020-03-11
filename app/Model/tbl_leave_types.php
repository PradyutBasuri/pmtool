<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_leave_types extends Model
{
    protected $table="tbl_leave_types";
    protected $fillable=['leave_type_name'];

    public function leave_type(){
        return $this->hasMany('App\tbl_employee_leave','leave_type','id');
    }

  
   
}
