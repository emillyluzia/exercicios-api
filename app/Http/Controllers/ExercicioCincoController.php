<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioCincoController extends Controller
{
    public function divisivel(Request $request){

        if($request->primeiraEntrada % 4 == 0){
            return json_encode([
                'resultado' => 'divisivel por 4'
            ]);
        } else {
            return json_encode([
                'resultado' => 'não é divisivel por 4'
            ]);
    


    }
    }
}
