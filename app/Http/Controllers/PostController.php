<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function _construct(){
        $this->middleware('auth');
    }
    public function index(){
        return view('inicio');
    }
    public function postMuro(){
        return view('postMuro');
    }
    public function store(Request $request){
        //dd(auth() -> user() -> id);
        post::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->PuTx,
            'imagen' => $request->imagen1,
            'user_id' => auth() -> user() -> id
            
        ]);
        //dd(auth() -> user() -> id);
        return redirect()->route('inicio', auth()->user()->userName );
    }
}
