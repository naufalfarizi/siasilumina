<?php

namespace App\Http\Controllers;

use App\User;
use App\NilaiPelajaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::user()->is_admin) {

            $users = User::count();

            $widget = [
                'users' => $users,
                //...
            ];
            return view('home', compact('widget'));
        }
        $allNilai = NilaiPelajaran::where('users_id', Auth::user()->id)->get();
        return view('dashboard', compact('allNilai'));
    }
}
