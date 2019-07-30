<?php

namespace paeCrea;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $table= 'formulario';
    protected $primaryKey = 'idFormulario';

    public $timestamps = false;

    protected $fillable = [

    ];
    protected $guarded = [

    ];
}
