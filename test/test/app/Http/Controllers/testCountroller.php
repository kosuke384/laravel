<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testCountroller extends Controller
{
    public function index(Request $request){
        $data=[
            ['name'=>'aaa','mail'=>'aaa@aaa.com'],
            ['name'=>'bbb','mail'=>'bbb@bbb.com']
        ];
        return view('index',[
            'data'=>$data,
            'message'=>'コントローラーからのメッセージ',
            /*'date'=>$request->date*/
        ]);
    }

    public function other(Request $request){
        
        return view('other');
    }
}
