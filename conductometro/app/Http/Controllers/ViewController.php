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
            $aulasData = DB::select("SELECT id, name, capacidade_alunos, tipo_aula, momento_aula, created_at, updated_at FROM aulas;");

            return view('dashboard', ['aulasData' => $aulasData]);
        } else {
            // admin
            // aqui obter todas as contact form submission
            $contactForm = DB::select("SELECT id, name, email, telefone, mensagem, deseja_marketing, created_at, updated_at FROM contact_form_submissions;");
            return view('admin_dashboard', ['contactForm' => $contactForm]);
        }
    }
}
