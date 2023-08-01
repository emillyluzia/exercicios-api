<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioTresController extends Controller
{
    public function aritimetica(Request $request){
        $primeiraEntrada = $request->primeiraEntrada;
        $segundaEntrada = $request->segundaEntrada; 
        $terceiraEntrada = $request->terceiraEntrada;

        return json_encode([
            'resultado' => ($primeiraEntrada * $segundaEntrada * $terceiraEntrada) / 3
        ]); 
    }
}
