<?php

namespace App\Http\Controllers;

use App\Localidad;
use App\Tipo;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home(){
        $tipos = Tipo::all();
        $localidades=Localidad::all();
        return view('home',compact('tipos','localidades'));
        
    }
    public function Store(Request $request){
        dd($request->all());
        return 'store';
    }
}
