<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CriadorDeAulasRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class CriadorDeAulasController extends Controller
{
    /**
     * Contact form submission handler.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function handleCriacaoDeAula(Request $request)
    {

        // validar dados e descodificar form request em array
        $validatedRequest = $request->all();

        Log::error("contact form data:", [json_encode($validatedRequest)]);

        // guardar os dados do contact form
        $insertQuery = "INSERT INTO aulas
        (name,capacidade_alunos,tipo_aula, diaDaAula,horas,created_at)
        VALUES (?,?,?,?, CURRENT_TIMESTAMP());";



        DB::insert($insertQuery, [
            $validatedRequest['name'],
            $validatedRequest['capacidade_alunos'],
            $validatedRequest['tipo_aula'],
            $validatedRequest['diaDaAula'],
            $validatedRequest['horas'],
        ]);


        return view("sucesoaula", [
            'name' => $validatedRequest['name'],
            'diaDaAula' => $validatedRequest['diaDaAula']

        ]);
    }


}
