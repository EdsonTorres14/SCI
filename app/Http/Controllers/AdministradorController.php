<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;

class AdministradorController extends Controller
{
    public function index()
    {
        return view('layouts.layoutAdmin');
    }
}
