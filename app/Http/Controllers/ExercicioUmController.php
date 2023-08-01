<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioUmRequest;
use Illuminate\Http\Request;

class ExercicioUmController extends Controller
{
    public function multiplicar(ExercicioUmRequest $request)
    {
        $primeiraEntrada = $request->primeiro_numero;
        $segundaEntrada = $request->segundo_numero;

        return json_encode([
            'resultado' => $primeiraEntrada * $segundaEntrada
        ]);
    }
}
