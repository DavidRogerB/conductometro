<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormSubmissionRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'mensagem' => ['required', 'string'],
            'telefone' => ['required', 'string'],
            'desejamarketing' => ['bool'],
            'politicaprivacidade' => ['required', 'bool'],
        ];
    }
}
