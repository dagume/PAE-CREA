<?php

namespace paeCrea;

use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{

    protected $table= 'colegio';
    protected $primaryKey = 'idColegio';

    public $timestamps = false;

    protected $fillable = [
        'nombreColegio',
        'estadoColegio',
        'Municipio_idMunicipio',
        'Persona_idPersona'
    ];
    protected $guarded = [

    ];
}
