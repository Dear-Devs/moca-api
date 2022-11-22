<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            [
                'id' => 1,
                'name' => "Super Administrator",
                'description' => "It can use all functions."
            ],
            [
                'id' => 2,
                'name' => "Administrator",
                'description' => "It can see reports about employee attendance"
            ],
            [
                'id' => 3,
                'name' => "Employee",
                'description' => "This can take check in and check out of him assistance"
            ],
        ]);
    }
}
