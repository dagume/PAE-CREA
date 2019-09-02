<?php

namespace paeCrea\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Encabezado1FormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
            'simatCuatro'=>'numeric',
            'simatNueve'=>'numeric',
            'simatCatorce'=>'numeric',
            'atendidosCuatro'=>'numeric',
            'atendidosNueve'=>'numeric',
            'atendidosCatorce'=>'numeric',

        ];
    }
}
