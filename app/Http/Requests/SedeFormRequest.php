<?php

namespace paeCrea\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SedeFormRequest extends FormRequest
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
            'nombreSede'=>'required|max:100',
            'nivelEscolariad'=>'max:50',
            'zona'=>'required|max:100',
            'escolarizada'=>'required|max:50',
            'direccion'=>'required|max:100',
            'telefono'=>'max:20',
            'correo'=>'max:100',
            //'estadoSede'=>'required',
            'Colegio_idColegio'=>'required',
        ];
    }
}
