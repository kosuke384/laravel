<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(){
        $hasItems=Person::has('boards')->get();
        $noItems=Person::doesntHave('boards')->get();
        $param=[
            'hasItems'=>$hasItems,
            'noItems'=>$noItems
        ];
        return view('person.index',$param);
    }

    public function add(){
        return view('person.add');
    }

    public function create(Request $request){
        $this->validate($request,Person::$rules);
        $person=new Person;
        $form=$request->all();
        unset($form['__token']);
        $person->fill($form)->save();
        return redirect('person');
    }

    public function edit(Request $request){
        $person=Person::find($request->id);
        return view('person.edit',[
            'form'=>$person
        ]);
    }

    public function update(Request $request){
        $this->validate($request,Person::$rules);
        $person=Person::find($request->id);
        $form=$request->all();
        unset($form['__token']);
        $person->fill($form)->save();
        return redirect('person');
    }

    public function delete(Request $request){
        $person=Person::find($request->id);
        return view('person.del',[
            'form'=>$person
        ]);
    }

    public function destroy(Request $request){
        Person::find($request->id)->delete();
        return redirect('person');
    }

    public function find(Request $request){
        return view('person.find',['input'=>'']);
    }

    public function search(Request $request){
        $min=$request->input*1;
        $max=$min+10;
        $item=Person::AgeGreaterThan($min)->AgeLessThan($max)->first();
        $param=[
            'input'=>$request->input,
            'item'=>$item
        ];
        return view('person.find',$param);
    }
}
