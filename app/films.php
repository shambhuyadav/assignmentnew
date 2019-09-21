<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class films extends Model
{
    protected $table = 'films';
    protected $fillable = ['title', 'episode_id' , 'director' , 'producer' ,'release_date'];

    public static function getfilms(){

      $value = DB::table('films')->orderBy('f_id', 'asc')->get(); 
      return $value;

    }
}
