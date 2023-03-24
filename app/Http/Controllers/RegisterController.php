<?php
//namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;


use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * resivbe con que vista tiene que trabajar
     * */
    public function index(){
        return view('register');
    }
   
    /**
     * $ todas lasa variavles que inician con este signo
     * */ 
    function store(Request $request){
        $this->validate($request,[
            'name'=>'required|string|min:5',
            'username'=>'required|string|unique:users|min:3|max:30',
            'email'=>'required|string|unique:users|email',
            'password'=>'required|string|min:6'
        ]);
        //dd($request);
       User::create([
            'name'=>$request['name'],
            'username'=>$request['username'],
            'email'=>$request['email'],
            'password'=> Hash::make($request['password']),
        ]);
        
        
        
        auth()->attempt($request->only('email', 'password'));
        return to_route('inicio');
         //return redirect()->route('/inicio');
       // return view('login');
    }
 
    /*function AddUser(Request $req){
        $usuario = new User;
        $usuario->name=$req->name;
        $usuario->username=$req->username;
        $usuario->email=$req->email;
        $usuario->password=$req->password;
        $usuario->save();
    }*/

}
