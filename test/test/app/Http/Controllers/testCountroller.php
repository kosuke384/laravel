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
        $validate_rule=[
            'name'=>'required',
            'email'=>'email',
            'age'=>'numeric|between:0,150'
        ];
        $this->validate($request,$validate_rule);
        return view('other',[
            'msg'=>'正しく入力されました'
        ]);
    }
}
