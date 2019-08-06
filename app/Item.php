<?php

namespace paeCrea;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table= 'item';
    protected $primaryKey = 'idItem';

    public $timestamps = false;

    protected $fillable = [
        'itemTexto',
        'estadoItem',
        'Criterio_Evaluacion_idCriterio_Evaluacion'
    ];
    protected $guarded = [

    ];
}
