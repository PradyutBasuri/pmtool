<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tbl_permission extends Model
{
    protected $fillable = ['roll_type','page_url','created_at','updated_at'];
}
