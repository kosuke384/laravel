<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;
use Validator;
use Illuminate\Support\Facades\DB;

class testCountroller extends Controller
{
    public function index(Request $request){
        $items=DB::table('people')->get();
        return view('index',[
            'items'=>$items
            /*'date'=>$request->date*/
        ]);
    }

    public function other(Request $request){
        $validate_rule=[
            'msg'=>'required'
        ];
        $this->validate($request,$validate_rule);
        $msg=$request->msg;
        $response=response()->view('index',[
            'msg'=>$msg.'をクッキーに保存しました'
        ]);
        $response->cookie('msg',$msg,100);
        return $response;
    }

    public function show(Request $request){
        $name=$request->name;
        $items=DB::table('people')->where('name','like','%'.$name.'%')
        ->orWhere('email','like','%'.$name.'%')->get();
        return view('show',[
            'items'=>$items
        ]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $param=[
            'name'=>$request->name,
            'email'=>$request->email,
            'age'=>$request->age
        ];
        DB::insert('insert into people(name,email,age) values(:name,:email,:age)',$param);
        return redirect('index');
    }

    public function edit(Request $request){
            $param=['id'=>$request->id];
            $item=DB::select('select * from people where id = :id',$param);    
        return view('edit',[
            'form'=>$item[0],
        ]);
    }

    public function update(Request $request){
        $param=[
            'id'=>$request->id,
            'name'=>$request->name,
            'email'=>$request->email,
            'age'=>$request->age
        ];

        DB::update('update people set name=:name,email=:email,age=:age where id = :id',$param);
        return redirect('index');
    
    }

    public function delete(Request $request){
        $param=['id'=>$request->id];
        $item=DB::select('select * from people where id = :id',$param);
        return view('delete',[
            'form'=>$item[0]
        ]);
    }

    public function destroy(Request $request){
        $param=['id'=>$request->id];
        DB::delete('delete from people where id = :id',$param);
        return redirect('index');
    }
}
