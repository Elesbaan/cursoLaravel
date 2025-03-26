<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function getName()
    {
        return view('welcome', ['nombre' => 'Elesbaan']);
    }

    public function suma()
    {
        $x = 5;
        $y = 10;
        $suma = $x + $y;
        return "La suma es: " . $suma;
    }
}

