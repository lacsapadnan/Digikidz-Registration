<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrtuController extends Controller
{
    public function index()
    {
        $data_ortu = \App\dataOrtu::all();
        return view('ortu.index',['data_ortu' => $data_ortu]);
    }

    public function create(Request $request)
    {
        \App\dataOrtu::create($request->all());
        return redirect('/ortu');
    }

    public function edit($id)
    {
        $ortu = \App\dataOrtu::find($id);
        return view('ortu/edit',['ortu' => $ortu]);
    }   

    public function update(Request $request, $id)
    {
        $ortu = \App\dataOrtu::find($id);
        $ortu->update($request->all());
        return redirect('/ortu');
    } 

    public function delete($id)
    {
        $ortu = \App\dataOrtu::find($id);
        $ortu->delete($ortu);
        return redirect('/ortu');
    }  
}
