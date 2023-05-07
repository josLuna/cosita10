<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use App\Models\post;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;

$dir;
class imagenController extends Controller
{
    //
    public function store(Request $request){
        
        $image = $request -> file('file');
        $nombreImagen = Str::uuid().".".$image->extension();
        $imagenServidor = Image::make($image);
        $imagenServidor->fit(1000,1000);
        $imagePath = public_path('uploads')."/".$nombreImagen;
        $imagenServidor->save($imagePath);
        return response()->json(['imagen'=>"$nombreImagen"]);
    }

   
}
