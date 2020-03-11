<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_projects extends Model
{
    protected $table='tbl_projects';
    protected $fillable=['project_name','language_id','project_description','user_id','team_id','project_percentage',
    'project_status','client_id','milestone','duration','priority', 'created_at','updated_at','deleted_at'];

    public function language_name(){
        return $this->hasOne('App\tbl_languages','id','language_id');
    }
public function user_details_of_admin(){
    return $this->hasOne('App\User','id','user_id')->where('roll_type','0');
}


public function client_details(){
    return $this->hasOne('App\tbl_clients','id','client_id')->whereNull('deleted_at');
}
public function get_team_members(){
    return $this->belongsTo('App\tbl_teams','team_id','id');
}

}

