<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\characters;

class CharacterController extends Controller
{
  public function index()
    {
        return view('home');
    }  

  public function store(Request $request)
    {

        


        // $request->validate([
        //     'name' => 'required',
        //     'height' => 'required',
        //     'skin_color' => 'required',
        //     'birth_year' => 'required',
        //     'gender' => 'required',
        // ]);
       // dd();

       

        //var_dump($request);
         /*
         return json_encode(array(
            "statusCode"=>200,
            "info"=>55
        ));
        */
        // dd('api');
        // var_dump($request);


        //list charters
        
        foreach ($request['data'] as $key => $value) {
            # code...
            $a= $value;
            //echo "try to insert";
            characters::create($a);
            //echo "created";
           // dd($a->all());
        }

       // echo json_encode($a);
       //    exit;
        return json_encode(array(
        	"statusCode"=>200,
        	"info"=>'successfully Inserted',
            //"data"=>$request['data'],
        ));
        
        
    } 
        public function getcharacter()
        {
            $userData['data'] = characters::getcharacter();
            echo json_encode($userData);
            exit;
        }
}
