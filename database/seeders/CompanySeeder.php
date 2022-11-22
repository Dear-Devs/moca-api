<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::insert([
            [
                'name' => "Punto Creativo",
                'logo' => null,
                'address' => "Rtno. 4 de Sur 16 No40, Agrícola Oriental, Iztacalco, 08500 Ciudad de México, CDMX",
                'address_latitude' => "19.350328",
                'address_longitude' => "-99.083004",
                'check_in_time' => "07:00",
                'check_out_time_fulltime' => "18:00",
                'check_out_time_part_time' => null,
                'minutes_late' => 10,
            ],
            [
                'name' => "TDM Internacional",
                'logo' => "https://tdminternacional.com/wp-content/uploads/2021/04/Logo1_500.jpg",
                'address' => "C. Nueva Rusia 105 - 3, zona 1, Recursos Hidraulicos, 62245 Cuernavaca, Mor.",
                'address_latitude' => "18.948308",
                'address_longitude' => "-99.227734",
                'check_in_time' => "07:00",
                'check_out_time_fulltime' => "18:00",
                'check_out_time_part_time' => null,
                'minutes_late' => null,
            ],
        ]);
    }
}
