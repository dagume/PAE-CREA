<?php

namespace paeCrea;

use Illuminate\Database\Eloquent\Model;

class Encabezado1 extends Model
{
    protected $table= 'encabezado1';
    protected $primaryKey = 'idEncabezado1';

    public $timestamps = false;

    protected $fillable = [
        'visitaNum',
        'tipoVisita',
        'simatCuatro',
        'simatNueve',
        'simatCatorce',
        'atendidosCuatro',
        'atendidosNueve',
        'atendidosCatorce',
        'concepVisitaSanitaria',
        'fechaVisitaSanitaria',
        'porcentajeVisitaSanitaria',
        'Formulario_idFormulario'

    ];
    protected $guarded = [

    ];
}
