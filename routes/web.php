<?php

use App\Http\Controllers\CursoController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculadoraController;

Route::get('/calculadora', [CalculadoraController::class, 'index'])->name('calculadora.index');
Route::post('/calculadora', [CalculadoraController::class, 'calcular'])->name('calculadora.calcular');



/* Route::get('/hola', function () {
    return 'Hola Mundo';
});

Route::get('/suma', [CursoController::class,'suma'])->name('plus');

Route::get('/suma/{x}/{y}',function ($x, $y) {


        $suma = $x + $y;
        return "La suma es: " . $suma;
  
})->where(['x'=>'[0-9]+', 'y'=>'[0-9]+']);

Route::get('/nombre/{name?}',function ($name = 'Invitado') {

   return "Mi nombre es: " . $name;
    
})->where('name','[a-zA-Z]+');


route::get('/verificar',function (Request $request) {
    if ($request->route()->named('verificar')) {
        return 'ok';
    }else{
        return 'Esta ruta no existe';
    }
});

Route::redirect('/sumar', '/suma',302); */
