<?php

namespace paeCrea;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $table= 'formulario';
    protected $primaryKey = 'idFormulario';

    public $timestamps = false;

    protected $fillable = [
        'Visita_idVisita',
        'Visita_Persona_idPersona',
        'Visita_Tipo_Formulario_idTipo_Formulario',
        'Visita_Sede_idSede'
    ];
    protected $guarded = [

    ];
}
