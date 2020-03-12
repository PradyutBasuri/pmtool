<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tbl_holidays extends Model
{
    protected $table='tbl_holidays';
    protected $fillable=['day_name','holiday_date','holiday_name', 'created_at','updated_at','deleted_at'];
    
}
