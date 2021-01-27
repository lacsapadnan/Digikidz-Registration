<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuridController extends Controller
{
    public function index()
    {
        $data_murid = \App\dataMurid::all();
        return view('murid.index',['data_murid' => $data_murid]);
    }

    public function create(Request $request)
    {
        \App\dataMurid::create($request->all());
        return redirect('/murid');
    }   

    public function edit($id)
    {
        $murid = \App\dataMurid::find($id);
        return view('murid/edit',['murid' => $murid]);
    }   

    public function update(Request $request, $id)
    {
        $murid = \App\dataMurid::find($id);
        $murid->update($request->all());
        return redirect('/murid');
    } 

    public function delete($id)
    {
        $murid = \App\dataMurid::find($id);
        $murid->delete($murid);
        return redirect('/murid');
    }  
}
