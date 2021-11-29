<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CriadorDeAulasRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'tipo_aula' => ['required', 'string', 'email'],
            'diaDaAula' => ['required', 'date'],
            'horas' => ['required', 'time'],
        ];
    }
}
