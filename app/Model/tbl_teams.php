<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_teams extends Model
{
    protected $table='tbl_teams';
    protected $fillable=['team_name','employee_id'];
    public function project_wise(){
        return $this->hasMany('App\User','id','employee_id');
    }

   
    public function project_details(){
        return $this->hasMany('App\tbl_projects','team_id','id');
    }
}
