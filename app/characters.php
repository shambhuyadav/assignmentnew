<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class characters extends Model
{    
	protected $table = 'characters';
    protected $fillable = [ 'name', 'height', 'skin_color', 'birth_year', 'gender'];

    public static function getcharacter(){

    
      $value=DB::table('characters')->orderBy('c_id', 'asc')->get(); 
    
      
    return $value;
  
  }
}
