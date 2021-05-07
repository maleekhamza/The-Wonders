<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use app\Evenement;
use Illuminate\Http\Request;
use App\evenement;
use App\club;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
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
<<<<<<< HEAD
=======

>>>>>>> 6ab70f8e89384e36465e4a44d883059b688d8b7c
    public function welcome()
    {
        return view('welcome');
    }
<<<<<<< HEAD
    
    public function IEEE()

    {
        $evenements=Evenement::intRandomOrder()->limit(3)->get();
        return view('IEEE',[
            'evenements' => $Evenement
        ]);
    }
   

=======
    public function Tunivision()
    {
        $evenements= evenement::inRandomOrder()->limit(3)->get();
        return view('TunivisionHome',[
            'evenements' => $evenement
        ]);
    }
>>>>>>> 6ab70f8e89384e36465e4a44d883059b688d8b7c
}
