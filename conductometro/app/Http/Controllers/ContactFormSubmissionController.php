<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormSubmissionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ContactFormSubmissionController extends Controller
{
    /**
     * Contact form submission handler.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function handleContactFormSubmission(Request $request)
    {

        // validar dados e descodificar form request em array
        $validatedRequest = $request->all();

        Log::error("contact form data:", [json_encode($validatedRequest)]);

        // guardar os dados do contact form
        $insertQuery = "INSERT INTO contact_form_submissions
        (name,email,mensagem,telefone,deseja_marketing, created_at)
        VALUES (?,?,?,?,?, CURRENT_TIMESTAMP());";


        DB::insert($insertQuery, [
            $validatedRequest['nome'],
            $validatedRequest['email'],
            $validatedRequest['mensagem'],
            $validatedRequest['telefone'],
            $this->convertCheckboxToInteger($validatedRequest['desejamarketing']),
        ]);

        return view("success_contact_form", [
            'nome' => $validatedRequest['nome'],
            'email' => $validatedRequest['email']
        ]);
    }

    private function convertCheckboxToInteger(string $checkboxValue): int
    {
        if ($checkboxValue === 'on') {
            return 1;
        }

        return 0;
    }
}
