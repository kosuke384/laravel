<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;
use Validator;

class testCountroller extends Controller
{
    public function index(Request $request){
        $validator=Validator::make($request->query(),[
            'id'=>'required',
            'pass'=>'required'
        ]);

        if($validator->fails()){
            $msg='クエリーに問題があります';
        }else{
            $msg='ID/PASSを受け付けました';
        }

        $data=[
            ['name'=>'aaa','mail'=>'aaa@aaa.com'],
            ['name'=>'bbb','mail'=>'bbb@bbb.com']
        ];
        return view('index',[
            'data'=>$data,
            'message'=>'コントローラーからのメッセージ',
            'msg'=>$msg
            /*'date'=>$request->date*/
        ]);
    }

    public function other(Request $request){
        $rules=[
            'name'=>'required',
            'email'=>'email',
            'age'=>'numeric|between:0,150'
        ];
        $message=[
            'name.required'=>'入力してください',
            'email.email'=>'メールアドレスを入力してください',
            'age.numeric'=>'年齢を入力してください',
            'age.between'=>'0～150歳で入力してください'
        ];
        $validator=Validator::make($request->all(),$rules,$message);
        if($validator->fails()){
            return redirect('index')
            ->withErrors($validator)
            ->withInput();
        }
        return view('other',[
            'msg'=>'正しく入力されました'
        ]);
    }
}
