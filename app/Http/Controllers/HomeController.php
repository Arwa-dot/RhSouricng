<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entreprise;
use App\Offre;

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
        $offres= Offre::withTrashed()->latest()->simplePaginate(8);
       
        return view('welcome',compact('offres'));
    }
}
