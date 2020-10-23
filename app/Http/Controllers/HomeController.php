<?php


namespace App\Http\Controllers;


use App\User;

class HomeController extends Controller
{


    public function welcome()
    {

    }

    public function home()
    {
        $users = User::withCount('theses')->orderBy('theses_count', 'desc')->get();
        return view('home', compact('users'));
    }

}
