<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    public function index()
    {
        $data_kurikulum = \App\dataKurikulum::all();
        return view('kurikulum.index',['data_kurikulum' => $data_kurikulum]);
    }

    public function create(Request $request)
    {
        \App\dataKurikulum::create($request->all());
        return redirect('/kurikulum');
    }

    public function edit($id)
    {
        $kurikulum = \App\dataKurikulum::find($id);
        return view('kurikulum/edit',['kurikulum' => $kurikulum]);
    }   

    public function update(Request $request, $id)
    {
        $kurikulum = \App\dataKurikulum::find($id);
        $kurikulum->update($request->all());
        return redirect('/kurikulum');
    } 

    public function delete($id)
    {
        $kurikulum = \App\dataKurikulum::find($id);
        $kurikulum->delete($kurikulum);
        return redirect('/kurikulum');
    }  
}
