<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TesteController extends Controller
{
    public function teste(int $p1, int $p2){
        $total = $p1+$p2;
        //echo "A soma de P1 + P2 = ".$p1+$p2;
        // return view('site.teste', ['x'=>$p1, 'y'=> $p2, 'total'=>$total]);
       // return view('site.teste', compact('p1', 'p2', 'total'));
       //return view('site.teste')->with('p1', $p1);

    }
}
