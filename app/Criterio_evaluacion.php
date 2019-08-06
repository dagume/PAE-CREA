<?php

namespace paeCrea;

use Illuminate\Database\Eloquent\Model;

class Criterio_evaluacion extends Model
{
    protected $table= 'criterio_evaluacion';
    protected $primaryKey = 'idCriterio_Evaluacion';

    public $timestamps = false;

    protected $fillable = [
        'descripcionCritEva',
        'estadoCriterio',
        'Tipo_Formulario_idTipo_Formulario'
    ];
    protected $guarded = [

    ];
}
