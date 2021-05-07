<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use app\Evenement;
use Illuminate\Http\Request;
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
    public function welcome(){
        return view('welcome');
    }
   
   
    public function Tunivision()
    {
        $evenements= evenement::inRandomOrder()->limit(3)->get();
        return view('TunivisionHome',[
            'evenements' => $evenement
        ]);
    }
    public function utilisateurs(){
        $user = DB::table('utilisateurs')->get();
 return view('admin.utilisateurs',['utilisateurs' => $user]);
    }
}
