<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\films;

class FilmsController extends Controller
{
   public function index()
    {
        return view('home');
    }  

 public function store(Request $request)
    {
       
        foreach ($request['data'] as $key => $value) {
          
            $a= $value;
            
            films::create($a);
           
        }

     
        return json_encode(array(
            "statusCode"=>200,
            "info"=>'successfully Inserted',
           
        ));
        
        
    } 
  public function getfilms()
    {
        $userData['data'] = films::getfilms();
        echo json_encode($userData);
        exit;
    }  
}
