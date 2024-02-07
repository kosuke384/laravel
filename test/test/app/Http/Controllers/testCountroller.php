<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;
use Validator;

class testCountroller extends Controller
{
    public function index(Request $request){
        
        return view('index',[
            'msg'=>'フォームを入力してください'
            /*'date'=>$request->date*/
        ]);
    }

    public function other(HelloRequest $request){
        
        return view('other',[
            'msg'=>'正しく入力されました'
        ]);
    }
}
