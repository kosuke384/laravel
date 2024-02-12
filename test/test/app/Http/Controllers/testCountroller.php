<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;
use Validator;
use Illuminate\Support\Facades\DB;

class testCountroller extends Controller
{
    public function index(Request $request){
        $items=DB::table('test')->orderBy('age','desc')->get();
        /*//全データ取得
        $items=DB::table('people')->get();
        */
        return view('index',[
            'items'=>$items
            /*'date'=>$request->date*/
        ]);
    }

    public function ses_get(Request $request){
        $sesdata=$request->session()->get('msg');
        return view('session',[
            'session_data'=>$sesdata
        ]);
    }

    public function ses_put(Request $request){
        $msg=$request->input;
        $request->session()->put('msg',$msg);
        return redirect('session');
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
        $page=$request->page;
        $items=DB::table('test')
        ->offset($page*2)
        ->limit(2)->get();
        /*
        $min=$request->min;
        $max=$request->max;
        //複雑条件
        $items=DB::table('people')
        ->whereRaw('age >= ? and age <= ?',[$min,$max])->get();
        */
        

        /*//複数条件
        $items=DB::table('people')->where('name','like','%'.$name.'%')
        ->orWhere('email','like','%'.$name.'%')->get();*/

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
        DB::table('test')->insert($param);
        /*SQL文のinsert
        DB::insert('insert into people(name,email,age) values(:name,:email,:age)',$param);
        */
        return redirect('index');
    }

    public function edit(Request $request){
        $item=DB::table('test')
        ->where('id',$request->id)->first();
        /*SQLでの取得
            $param=['id'=>$request->id];
            $item=DB::select('select * from people where id = :id',$param);    
        */
        return view('edit',[
            'form'=>$item,
        ]);
    }

    public function update(Request $request){
        $param=[
            'id'=>$request->id,
            'name'=>$request->name,
            'email'=>$request->email,
            'age'=>$request->age
        ];
        DB::table('test')->where('id',$request->id)->update($param);
        /*SQLでの更新
        DB::update('update people set name=:name,email=:email,age=:age where id = :id',$param);
        */
        return redirect('index');
    
    }

    public function delete(Request $request){
        $item=DB::table('test')->where('id',$request->id)->first();
        /*SQLでの表示
        $param=['id'=>$request->id];
        $item=DB::select('select * from people where id = :id',$param);
        */
        return view('delete',[
            'form'=>$item
        ]);
    }

    public function destroy(Request $request){
        DB::table('test')->where('id',$request->id)->delete();
        /*SQLでの削除
        $param=['id'=>$request->id];
        DB::delete('delete from people where id = :id',$param);
        */
        return redirect('index');
    }
}
