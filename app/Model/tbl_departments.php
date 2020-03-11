<?php


namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tbl_departments extends Model
{
    protected $fillable = ['dept_name','dept_head','dept_employee','created_at','updated_at','deleted_at'];
}
