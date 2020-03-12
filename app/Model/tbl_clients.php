<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tbl_clients extends Model
{
    protected $table='tbl_clients';
    protected $fillable=['location','address','client_name','client_email','client_ph','image',
    'twitter_link','linkedin_link','created_at','updated_at','deleted_at'];
}
