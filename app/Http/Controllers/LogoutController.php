<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function principal(){
        return view('inicio');
    }
    //
    public function store(){
        auth()->logout();
        return to_route('principal');
    }
}
