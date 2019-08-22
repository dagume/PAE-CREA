<?php

namespace paeCrea;

use Illuminate\Database\Eloquent\Model;

class Evaluacion1 extends Model
{
    protected $table= 'evaluacion1';
    protected $primaryKey = 'idEvaluacion1';

    public $timestamps = false;

    protected $fillable = [
        'evaluacion',
        'observacion',
        'manipuladoras',
        'Formulario_idFormulario',
        'Item_idItem'
    ];
    protected $guarded = [

    ];
}
