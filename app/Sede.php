<?php

namespace paeCrea;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $table= 'sede';
    protected $primaryKey = 'idSede';

    public $timestamps = false;

    protected $fillable = [
        'nombreSede',
        'nivelEscalaridad',
        'zona',
        'escolarizada',
        'direccion',
        'telefono',
        'correo',
        'estadoSede',
        'Colegio_idColegio'
    ];
    protected $guarded = [

    ];
}
