<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count = DB::table('data_murids')->count();
        $count_kurikulum = DB::table('data_kurikulums')->count();
        $count_user = DB::table('users')->count();
        return view('dashboard', compact ('count', 'count_kurikulum', 'count_user'));
    }
}
