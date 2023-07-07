<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Recompensa extends Controller
{
    public function verificaRecompensa(Request $request){
        $email = $request->input('email');



        $user = User::where('email', $email)->first();

        if ($user){

            return response()->json(['id' => $user->id]);
        }

        else{
            return response()->json(['exists' => $user]);
        }
    }


        public function verificaTiempo(Request $request, $id)
    {
        $user = User::where('id', $id)->firstOrFail();
        $oro = $user->oro; 


    if ($user) {
        $tiempoGuardado = $user->tiempo; 
        $tiempoActual = time(); 

        $intervalo = 24 * 60 * 60; // Intervalo de 24 horas a segundos

        if ($tiempoActual - $tiempoGuardado >= $intervalo) {

            $user->tiempo = $tiempoActual;
            $user->save();
            $tiempoVerificar = true;
            return response()->json(['tiempo' => $tiempoVerificar, 'oro' => $oro]);

        }
        else {

            $tiempoVerificar = false;
            return response()->json(['tiempo' => $tiempoVerificar, 'oro' => $oro]);

        }
        }
    }

    public function guardaRecompensa(Request $request, $id)
    {
        $recompensasList = array(200, 300, 400, 500);
        $recompensaAleatoria = $recompensasList[array_rand($recompensasList)];

        $user = User::where('id', $id)->firstOrFail();
        $recompensaBD = $user->oro;
        $user->oro = $recompensaAleatoria + $recompensaBD;
        $user->save();

        return response()->json(['recompensaAleatoria' => $recompensaAleatoria]);;
    }

}
