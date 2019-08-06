<?php
use paeCrea\Criterio_evaluacion;
use Illuminate\Database\Seeder;

class criterio_evaluacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Criterio_evaluacion::create([
            'descripcionCritEva' => 'Infraestructura',
            'estadoCriterio' => '1',
            'Tipo_Formulario_idTipo_Formulario' => '1',
            ]);
        Criterio_evaluacion::create([
            'descripcionCritEva' => 'Condiciones de almacenamiento',
            'estadoCriterio' => '1',
            'Tipo_Formulario_idTipo_Formulario' => '1',
            ]);
        Criterio_evaluacion::create([
            'descripcionCritEva' => 'Condiciones de preparación y servido',
            'estadoCriterio' => '1',
            'Tipo_Formulario_idTipo_Formulario' => '1',
            ]);
        Criterio_evaluacion::create([
            'descripcionCritEva' => 'Equipos y utencilios',
            'estadoCriterio' => '1',
            'Tipo_Formulario_idTipo_Formulario' => '1',
            ]);
        Criterio_evaluacion::create([
            'descripcionCritEva' => 'Personal manipulador',
            'estadoCriterio' => '1',
            'Tipo_Formulario_idTipo_Formulario' => '1',
            ]);
        Criterio_evaluacion::create([
            'descripcionCritEva' => 'Programa de limpieza y desinfección',
            'estadoCriterio' => '1',
            'Tipo_Formulario_idTipo_Formulario' => '1',
            ]);
        Criterio_evaluacion::create([
            'descripcionCritEva' => 'Programa de residuos sólidos',
            'estadoCriterio' => '1',
            'Tipo_Formulario_idTipo_Formulario' => '1',
            ]);
        Criterio_evaluacion::create([
            'descripcionCritEva' => 'Programa de control de plagas',
            'estadoCriterio' => '1',
            'Tipo_Formulario_idTipo_Formulario' => '1',
            ]);
        Criterio_evaluacion::create([
            'descripcionCritEva' => 'Programa de abastecimiento o suministro de agua',
            'estadoCriterio' => '1',
            'Tipo_Formulario_idTipo_Formulario' => '1',
            ]);
        Criterio_evaluacion::create([
            'descripcionCritEva' => 'Gestion documental',
            'estadoCriterio' => '1',
            'Tipo_Formulario_idTipo_Formulario' => '1',
            ]);
        Criterio_evaluacion::create([
            'descripcionCritEva' => 'Transporte',
            'estadoCriterio' => '1',
            'Tipo_Formulario_idTipo_Formulario' => '1',
            ]);
        Criterio_evaluacion::create([
            'descripcionCritEva' => 'Instalaciones sanitarias',
            'estadoCriterio' => '1',
            'Tipo_Formulario_idTipo_Formulario' => '1',
            ]);
        Criterio_evaluacion::create([
            'descripcionCritEva' => 'Salud ocupacional',
            'estadoCriterio' => '1',
            'Tipo_Formulario_idTipo_Formulario' => '1',
            ]);
    }
}
