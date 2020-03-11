<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_languages extends Model
{
  protected $table="tbl_languages";
  protected $fillable=['id','language_name'];
}
