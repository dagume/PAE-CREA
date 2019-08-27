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
            'simatCuatro'=>'required|numeric',
            'simatNueve'=>'required|numeric',
            'simatCatorce'=>'required|numeric',
            'atendidosCuatro'=>'required|numeric',
            'atendidosNueve'=>'required|numeric',
            'atendidosCatorce'=>'required|numeric',
            'porcentajeVisitaSanitaria'=>'required|numeric',

        ];
    }
}
