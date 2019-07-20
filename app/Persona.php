<?php

namespace paeCrea;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table= 'persona';
    protected $primaryKey = 'idPersona';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellidos',
        'email',
        'usuario',
        'identificacion',
        'celular',
        'estadoPersona',
        'tipoUsuario'
    ];
    protected $guarded = [

    ];
}
