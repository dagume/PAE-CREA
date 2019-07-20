<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //usuarios
        Permission::create([
        'name'          => 'Navegar usuarios',
        'slug'          => 'usuario.index',
        'description'   => 'Lista y navega tods los usuarios del sistema',
        ]);

        Permission::create([
        'name'          => 'ver detalle de usuario',
        'slug'          => 'usuario.show',
        'description'   => 'ver en detalle cada usuario del sistema',
        ]);

        Permission::create([
            'name'          => 'creacion de usuario',
            'slug'          => 'usuario.create',
            'description'   => 'ver en detalle cada usuario del sistema',
            ]);

        Permission::create([
        'name'          => 'edicion de usuario',
        'slug'          => 'usuario.edit',
        'description'   => 'editar cualquier dato de un usuario del sistema',

        ]);
        Permission::create([
        'name'          => 'eliminar usuario',
        'slug'          => 'usuario.destroy',
        'description'   => 'eliminar cualquier usuario del sistema',

        ]);

        //cuentas
        Permission::create([
            'name'          => 'Navegar cuentas',
            'slug'          => 'cuenta.index',
            'description'   => 'Lista y navega tods los cuentas del sistema',
            ]);

            Permission::create([
            'name'          => 'ver detalle de cuenta',
            'slug'          => 'cuenta.show',
            'description'   => 'ver en detalle cada cuenta del sistema',
            ]);

            Permission::create([
                'name'          => 'creacion de cuenta',
                'slug'          => 'cuenta.create',
                'description'   => 'ver en detalle cada cuenta del sistema',
                ]);

            Permission::create([
            'name'          => 'edicion de cuenta',
            'slug'          => 'cuenta.edit',
            'description'   => 'editar cualquier dato de un cuenta del sistema',

            ]);
            Permission::create([
            'name'          => 'eliminar cuenta',
            'slug'          => 'cuenta.destroy',
            'description'   => 'eliminar cualquier cuenta del sistema',

            ]);

        //roles
        Permission::create([
        'name'          => 'Navegar roles',
        'slug'          => 'rol.index',
        'description'   => 'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
        'name'          => 'ver detalle del rol',
        'slug'          => 'rol.show',
        'description'   => 'ver en detalle cada rol del sistema',
        ]);

        Permission::create([
            'name'          => 'creacion de rol',
            'slug'          => 'rol.create',
            'description'   => 'ver en detalle cada rol del sistema',
            ]);

        Permission::create([
        'name'          => 'edicion de rol',
        'slug'          => 'rol.edit',
        'description'   => 'editar cualquier dato de un rol del sistema',

        ]);
        Permission::create([
        'name'          => 'eliminar rol',
        'slug'          => 'rol.destroy',
        'description'   => 'eliminar cualquier rol del sistema',

        ]);

        //Municipios
        Permission::create([
        'name'          => 'Navegar municipios',
        'slug'          => 'municipio.index',
        'description'   => 'Lista y navega todos los municipios del sistema',
        ]);

        Permission::create([
        'name'          => 'ver detalle del municipio',
        'slug'          => 'municipio.show',
        'description'   => 'ver en detalle cada municipio del sistema',
        ]);

        Permission::create([
            'name'          => 'creacion de municipio',
            'slug'          => 'municipio.create',
            'description'   => 'ver en detalle cada municipio del sistema',
            ]);

        Permission::create([
        'name'          => 'edicion de municipio',
        'slug'          => 'municipio.edit',
        'description'   => 'editar cualquier dato de un municipio del sistema',

        ]);
        Permission::create([
        'name'          => 'eliminar municipio',
        'slug'          => 'municipio.destroy',
        'description'   => 'eliminar cualquier municipio del sistema',

        ]);

        //Colegios
        Permission::create([
        'name'          => 'Navegar colegios',
        'slug'          => 'colegio.index',
        'description'   => 'Lista y navega todos los colegios del sistema',
        ]);

        Permission::create([
        'name'          => 'ver detalle del colegio',
        'slug'          => 'colegio.show',
        'description'   => 'ver en detalle cada colegio del sistema',
        ]);

        Permission::create([
            'name'          => 'creacion de colegio',
            'slug'          => 'colegio.create',
            'description'   => 'ver en detalle cada colegio del sistema',
            ]);

        Permission::create([
        'name'          => 'edicion de colegio',
        'slug'          => 'colegio.edit',
        'description'   => 'editar cualquier dato de un colegio del sistema',

        ]);
        Permission::create([
        'name'          => 'eliminar colegio',
        'slug'          => 'colegio.destroy',
        'description'   => 'eliminar cualquier colegio del sistema',

        ]);

        //Sede
        Permission::create([
        'name'          => 'Navegar sedes',
        'slug'          => 'sede.index',
        'description'   => 'Lista y navega todos los sedes del sistema',
        ]);

        Permission::create([
        'name'          => 'ver detalle del sede',
        'slug'          => 'sede.show',
        'description'   => 'ver en detalle cada sede del sistema',
        ]);

        Permission::create([
            'name'          => 'creacion de sede',
            'slug'          => 'sede.create',
            'description'   => 'ver en detalle cada sede del sistema',
            ]);

        Permission::create([
        'name'          => 'edicion de sede',
        'slug'          => 'sede.edit',
        'description'   => 'editar cualquier dato de un sede del sistema',

        ]);
        Permission::create([
        'name'          => 'eliminar sede',
        'slug'          => 'sede.destroy',
        'description'   => 'eliminar cualquier sede del sistema',

        ]);

        //Supervisor
        Permission::create([
        'name'          => 'Navegar supervisores',
        'slug'          => 'supervisor.index',
        'description'   => 'Lista y navega todos los supervisores del sistema',
        ]);

        Permission::create([
        'name'          => 'ver detalle del supervisor',
        'slug'          => 'supervisor.show',
        'description'   => 'ver en detalle cada supervisor del sistema',
        ]);

        Permission::create([
            'name'          => 'creacion de supervisor',
            'slug'          => 'supervisor.create',
            'description'   => 'ver en detalle cada supervisor del sistema',
            ]);

        Permission::create([
        'name'          => 'edicion de supervisor',
        'slug'          => 'supervisor.edit',
        'description'   => 'editar cualquier dato de un supervisor del sistema',

        ]);
        Permission::create([
        'name'          => 'eliminar supervisor',
        'slug'          => 'supervisor.destroy',
        'description'   => 'eliminar cualquier supervisor del sistema',

        ]);
        //Visitas
        Permission::create([
        'name'          => 'Navegar visitas',
        'slug'          => 'visita.index',
        'description'   => 'Lista y navega todas las visitas del sistema',
        ]);

        Permission::create([
        'name'          => 'ver detalle del visita',
        'slug'          => 'visita.show',
        'description'   => 'ver en detalle cada visita del sistema',
        ]);

        Permission::create([
            'name'          => 'creacion de visita',
            'slug'          => 'visita.create',
            'description'   => 'ver en detalle cada visita del sistema',
            ]);

        Permission::create([
        'name'          => 'edicion de visita',
        'slug'          => 'visita.edit',
        'description'   => 'editar cualquier dato de un visita del sistema',

        ]);
        Permission::create([
        'name'          => 'eliminar visita',
        'slug'          => 'visita.destroy',
        'description'   => 'eliminar cualquier visita del sistema',

        ]);


    }
}
