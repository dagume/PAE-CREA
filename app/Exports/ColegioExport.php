<?php

namespace paeCrea\Exports;

use paeCrea\Colegio;
use Maatwebsite\Excel\Concerns\FromCollection;

class ColegioExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Colegio::
        join('municipio as m','Municipio_idMunicipio','=','m.idMunicipio')
        ->join('persona as p','Persona_idPersona','=','p.idPersona')
        ->select('idColegio', 'nombreColegio', 'm.nombreMunicipio as municipio', 'p.nombre','p.apellidos','p.identificacion')
        ->where('estadoColegio','=','1')->get();
    }
}
