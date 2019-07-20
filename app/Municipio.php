<?php

namespace paeCrea;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table= 'municipio';
    protected $primaryKey = 'idMunicipio';

    public $timestamps = false;

    protected $fillable = [
        'nombreMunicipio',
        'estadoMunicipio'
    ];
    protected $guarded = [

    ];
}
