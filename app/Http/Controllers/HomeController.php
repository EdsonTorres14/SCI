<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Auth::user()->hasRole('Administrador')) {
            /*return redirect()->route('layout.admin');*/
            return redirect()->route('perfiles.admin');
        }

        if(Auth::user()->hasRole('Capturista')) {
            /*return redirect()->route('layout.capturista');*/
            return redirect()->route('perfiles.capturista');
        }

        if(Auth::user()->hasRole('Gestor')) {
            /*return redirect()->route('layout.gestor');*/
            return redirect()->route('perfiles.gestor');
        }

    }


}
