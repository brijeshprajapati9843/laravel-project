<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function store(Request $request){
        // $name = $request->name;
        // $email = $request->email;
        // $contact = $request->contact;
        // $desc = $request->desc;
        // echo $name;
        // echo "<br>";
        // echo $email;
        // echo "<br>";
        // echo $contact;
        // echo "<br>";
        // echo $desc;

        if(DB::table('students')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'description'=>$request->desc
        ])){
            echo "Successfully Inserted.";
        }else{
            echo "Cannot Inserted!!";
        }

    }
}
