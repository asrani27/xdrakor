<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function home()
    {
        return view('mobile.home');
    }
}
