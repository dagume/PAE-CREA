<?php

namespace paeCrea\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisitaFormRequest extends FormRequest
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
            'fecha'=>'required|date|before:tomorrow',
            'Persona_idPersona'=> 'required|integer',
            'Tipo_Formulario_idTipo_Formulario'=> 'required|integer',
            'Sede_idSede'=> 'required|integer',
        ];
    }
}
