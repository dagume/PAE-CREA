<?php

use Illuminate\Database\Seeder;
use paeCrea\Colegio;

class ColegioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Colegio::create([
            'nombreColegio' => '',
            'estadoColegio' => '1',
            'Municipio_idMunicipio' => '',
            'Persona_idPersona' => '',
            ]);
    }
}
