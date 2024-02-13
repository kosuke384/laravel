<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restdata;
use Illuminate\Support\Facades\DB;

class RestappController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items=DB::table('resrdata')->simplePaginate(5);
        return view('rest.index',[
            'items'=>$items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rest.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $restdata=new Restdata;
        $form=$request->all();
        unset($form['__token']);
        $restdata->fill($form)->save();
        return redirect()->route('rest.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item=Restdata::find($id);
        return $item->toArray();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
