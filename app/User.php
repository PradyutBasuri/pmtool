<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name','email','email_verified_at',  'password','first_name','last_name','mob_no','roll_type',
        'emp_department_type','emp_image','emp_facebook_link','emp_twitter_link','emp_linkedin_link','remember_token',
        'created_at','updated_at'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function department_name()
    {
        return $this->hasOne('App\Model\tbl_departments','id','emp_department_type');
    }

    public function get_leaves(){
        return $this->hasMany('App\Model\tbl_employee_leave', 'employee_user_id', 'id');
    }
}
