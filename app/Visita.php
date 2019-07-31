<?php

namespace paeCrea;

use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    protected $table= 'visita';
    protected $primaryKey = 'idVisita';

    public $timestamps = false;

    protected $fillable = [
        'idVisita',
        'fecha',
        'estadoVisita',
        'Persona_idPersona',
        'Tipo_Formulario_idTipo_Formulario',
        'Sede_idSede'
    ];
    protected $guarded = [

    ];
}
