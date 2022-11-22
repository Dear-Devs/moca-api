<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hired = 1;

        $roleAdmin = 2;
        $roleEmployee = 3;

        User::insert([
            [
                'name' => 'Gandy Esaú',
                'first_surname' => 'Ávila',
                'second_surname' => 'Estrada',
                'photo' => 'https://picsum.photos/150/150.jpg',
                'phone' => '1111111111',
                'email' => '20193tn128@utez.edu.mx',
                'password' => Hash::make(env('SEEDER_PASSWORD')),
                'role_id' => $roleEmployee,
            ],
            [
                'name' => 'Gustavo Alejandro',
                'first_surname' => 'Lopez',
                'second_surname' => 'Zarate',
                'photo' => 'https://picsum.photos/150/150.jpg',
                'phone' => '2222222222',
                'email' => '20193tn081@utez.edu.mx',
                'password' => Hash::make(env('SEEDER_PASSWORD')),
                'role_id' => $roleEmployee,
            ],
            [
                'name' => 'Dafne Citlaly',
                'first_surname' => 'Jiménez',
                'second_surname' => 'Román',
                'photo' => 'https://picsum.photos/150/150.jpg',
                'phone' => '3333333333',
                'email' => '20193tn029@utez.edu.mx',
                'password' => Hash::make(env('SEEDER_PASSWORD')),
                'role_id' => $roleAdmin,
            ],
        ]);

        Employee::insert([
            [
                'user_id' => 1,
                'company_id' => 1,
                'job' => "Web Developer",
                'employee_status_id' => $hired,
                'is_admin' => false,
            ],
            [
                'user_id' => 2,
                'company_id' => 1,
                'job' => "Web Developer",
                'employee_status_id' => $hired,
                'is_admin' => false,
            ],
            [
                'user_id' => 3,
                'company_id' => 1,
                'job' => "Web Developer",
                'employee_status_id' => $hired,
                'is_admin' => true,
            ],
        ]);
    }
}
