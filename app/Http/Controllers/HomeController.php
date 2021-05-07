<?php

namespace App\Http\Controllers;

use App\Salle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth')->except('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function welcome(){
        return view('welcome');
    }
    public function google()
    {
        $salles= Salle::inRandomOrder()->limit(3)->get();
        return view('google',[
            'salles' => $salles
        ]);
    }
}
