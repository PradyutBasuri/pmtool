<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_employee_leave extends Model
{
    protected $table="tbl_employee_leaves";
    protected $fillable=['employee_user_id','leave_type','from_date','to_date','reason','created_at','updated_at','deleted_at'];
   
    public function employee_details(){
        return $this->belongsTo('App\User','employee_user_id');
    }

    public function leave_name(){
        return $this->belongsTo('App\tbl_leave_types','leave_type');
    }

}
