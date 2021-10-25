<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;

class GestorController extends Controller
{
    public function index()
    {
        return view('layouts.layoutGestor');
    }

}
