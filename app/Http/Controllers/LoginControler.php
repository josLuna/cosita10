<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;

class LoginControler extends Controller
{
    public function index(){
        $files = post::all();
        return view('inicio',compact('files'));
    }
    public function login1(){

        return view('login');
    }
    public function store(Request $request){
        $this->validate($request,[
            'email'=> 'required|string|email',
            'password'=>'required|string'
        ]);

        if(!auth()->attempt($request->only('email', 'password'))){
            return back()->with('mensaje', 'Credenciales incorrectas');
        }
        return to_route('inicio');
       //return redirect()->route('post.login');
    }

}
