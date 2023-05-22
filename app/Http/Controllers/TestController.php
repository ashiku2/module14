<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function Question1(Request $request){
        $name = $request->name;
    }

    public function Question4(){
        $content=array(
            'message'=>'Success',
            'data'=>array(
                'name'=>'John Doe',
                'age'=>25
            )

        );

        return response()->json($content);
    }

    public function Question5(Request $request){
        $picture = $request->file('avatar');
        $picture->move(public_path('public/uploads'), $picture->getClientOriginalName());
    }

    public function Question7(Request $request){
        $email = $request->email;
        $content = array('success'=>'true', 'message'=>'Form submitted successfully.');

        return response()->json($content);
    }
}
