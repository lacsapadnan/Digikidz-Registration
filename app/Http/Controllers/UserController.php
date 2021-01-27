<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data_user = User::all();
        return view('user.index',['data_user' => $data_user]);
    }

    public function create(Request $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => $request['role'],
        ]);
        return redirect('/user');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user/edit',['user' => $user]);
    }   

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return redirect('/user');
    } 

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete($user);
        return redirect('/user');
    }  
}
