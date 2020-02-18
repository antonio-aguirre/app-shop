<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Antonio',
            'email' => 'ej@ejcom',
            'password' => bcrypt('12345') //usa bcrypt para encriptar la contraseñña con la que accederá
        ]);
    }
}
