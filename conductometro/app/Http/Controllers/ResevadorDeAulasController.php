<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ResevadorDeAulasController extends Controller
{

    public function handleReservaDeAula(Request $request)
    {
        $validatedData = $request->all();

        $idDaAula = $validatedData['aula_id'];

        $currentUserID = Auth::id();
        $registarNaAula = "INSERT INTO users_aulas (user_id, aula_id, presenca)
        VALUES (?,?,0);";
        DB::insert($registarNaAula,[$currentUserID, $idDaAula]);


        return redirect("/dashboard");
    }
}
