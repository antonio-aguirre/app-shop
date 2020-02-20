<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class); // para que se ejecuten los seeders de usuario
        $this->call(ProductsTableSeeder::class); // para que se ejecuten los seeders de Producro
    }
}
