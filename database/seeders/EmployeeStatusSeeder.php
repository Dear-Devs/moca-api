<?php

namespace Database\Seeders;

use App\Models\EmployeeStatus;
use Illuminate\Database\Seeder;

class EmployeeStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployeeStatus::insert([
            [
                'id' => 1,
                'name' => "Hired",
                'description' => "The employee is currently working at the company.",
            ],
            [
                'id' => 2,
                'name' => "Allowed to absent",
                'description' => "The employee works in the company, but he does not attend because he is allowed to be absent.",
            ],
            [
                'id' => 3,
                'name' => "Suspended",
                'description' => "The employee works in the company, but he does not attend because he is allowed to be absent.",
            ],
            [
                'id' => 4,
                'name' => "Fired",
                'description' => "The employee does not work for the company.",
            ],
        ]);
    }
}
