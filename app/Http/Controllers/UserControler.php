<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserControler extends Controller
{
    public function inicio(){
        return view('login');
    }
}
