<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use app\Evenement;
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
    public function welcome()
    {
        return view('welcome');
    }
    
    public function IEEE()

    {
        $evenements=Evenement::intRandomOrder()->limit(3)->get();
        return view('IEEE',[
            'evenements' => $Evenement
        ]);
    }
   

}
