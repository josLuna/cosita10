<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;

class UserControler extends Controller
{
    public function inicio(){
        $files = post::all();
        return view('inicio',compact('files'));
    }
}
