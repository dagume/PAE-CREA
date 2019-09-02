<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MunicipioTableSeeder::class);
        //$this->call(ItemTableSeeder::class);
        //$this->call(criterio_evaluacionTableSeeder::class);
        //$this->call(PermissionsTableSeeder::class);
        //$this->call(UsersTableSeeder::class);
    }
}
