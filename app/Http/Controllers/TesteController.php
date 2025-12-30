<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2){
        //arraya associativo passado parametro para view3
        //return view('site.site',['p1' => $p1,'p2' => $p2]);

        //metodo compact passado parametro para view3
        //return view('site.site',compact('p1','p2'));

        //metodo with passado parametro para view3
        return view('teste.site')->with('p1', $p1)->with('p2', $p2);
    }
}
