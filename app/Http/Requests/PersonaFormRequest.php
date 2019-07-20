<?php

namespace paeCrea\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaFormRequest extends FormRequest
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
            'nombre'=>'required|max:100',
            'apellidos'=>'required|max:100',
            'email'=>'required|max:100',
            'usuario'=>'required|max:100',
            'identificacion'=>'required|numeric',
            'celular'=>'numeric',
            'estadoPersona'=>'numeric',
        ];
    }
}
