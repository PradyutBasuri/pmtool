<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tbl_teams extends Model
{
    protected $table='tbl_teams';
    protected $fillable=['team_name','employee_id'];
    public function project_wise(){
        return $this->hasMany('App\Model\User','id','employee_id');
    }

   
    public function project_details(){
        return $this->hasMany('App\Model\tbl_projects','team_id','id');
    }
}
