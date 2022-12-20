<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //
    public function principal()
    {
        return view('site.principal');
    }

    public function SobreNos()
    {
        return view('site.sobre-nos');
    }

    public function Contato()
    {
        return view('site.contato');
    }
}
