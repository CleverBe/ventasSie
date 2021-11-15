<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
<<<<<<< HEAD
            'name' => 'Clever',
            'phone' => '6187236',
            'email' => 'cleverbernal123@gmail.com',
=======
            'name' => 'fenris',
            'phone' => '1234567890',
            'email' => 'correo@correo.com',
>>>>>>> f8804e3338d4b24ea8f205abcb9e454d603e2bd7
            'profile' => 'ADMIN',
            'status' => 'ACTIVE',
            'password' => bcrypt('123')
        ]);
        User::create([
<<<<<<< HEAD
            'name' => 'Ramiro',
            'phone' => '7187235',
            'email' => 'Ramiro123@gmail.com',
=======
            'name' => 'daryl',
            'phone' => '1234567891',
            'email' => 'correo@correo1.com',
>>>>>>> f8804e3338d4b24ea8f205abcb9e454d603e2bd7
            'profile' => 'EMPLOYEE',
            'status' => 'ACTIVE',
            'password' => bcrypt('123')
        ]);
    }
}
