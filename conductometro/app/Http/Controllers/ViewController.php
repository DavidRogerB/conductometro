<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ViewController extends Controller
{
    public function landingPage(Request $request)
    {
        return view('landing');
    }
    public function handleConsuladeAula(Request $request)
    {

        // validar dados e descodificar form request em array


        // guardar os detalhes da aula agendada



       // $dia = DB::select("SELECT  name, capacidade_alunos, tipo_aula, diaDaAula, horas FROM aulas WHERE diaDaAula = '2000-12-25'; ");
       $aulas = DB::table('aulas')->get();


        return view("dashboardpesquisa",['aulas' => $aulas]);
    }




    public function handleCriacaoDeAula(Request $request)
    {

        // validar dados e descodificar form request em array
        $validatedRequest = $request->all();

        Log::error("contact form data:", [json_encode($validatedRequest)]);

        // guardar os detalhes da aula agendada
        $insertQuery = "INSERT INTO aulas
        (name,capacidade_alunos,tipo_aula, diaDaAula,horas,created_at)
        VALUES (?,?,?,?,?, CURRENT_TIMESTAMP());";



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

    public function dashboardPage(Request $request)
    {
        $currentUserID = Auth::id();
        $verificarPermissoes = "SELECT tipo_usuario FROM users WHERE id = ?";
        $resultados = DB::select($verificarPermissoes, [$currentUserID]);

        if (count($resultados) == 0) {
            // error
            // usuario nao existe
        }

        $dadosUsuario = $resultados[0];
        // Log::error("auth user id", ["id " => $currentUserID, "tipoUsuario" => $dadosUsuario]);

        if ($dadosUsuario->tipo_usuario === 0) {
            // usuario normal / aluno
            // aqui obter todas as aulas na DB
            // usando models seria assim: $aulasData = Aula::all();
            $aulasData = DB::select("SELECT id, name, capacidade_alunos, tipo_aula, diaDaAula, horas, created_at, updated_at FROM aulas;");

            return view('dashboard', ['aulasData' => $aulasData]);
        } else {
            // admin
            // aqui obter todas as contact form submission
            $contactForm = DB::select("SELECT id, name, email, telefone, mensagem, deseja_marketing, created_at, updated_at FROM contact_form_submissions;");
            $aulas = DB::insert('INSERT INTO aulas (name, capacidade_alunos,tipo_aula,diaDaAula, horas ) values (?, ?, ?, ?, ?)', [0, '20',"2",'2000-12-25','23:00:00']);


            return view('admin_dashboard', ['contactForm' => $contactForm], ['aulas' => $aulas]);
        }
    }
}
