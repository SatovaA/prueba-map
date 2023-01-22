<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'idCity' => 1,
            'name' => 'Bogota',
            'idCountry' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        City::create([
            'idCity' => 2,
            'name' => 'Medellin',
            'idCountry' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        City::create([
            'idCity' => 3,
            'name' => 'Cali',
            'idCountry' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        City::create([
            'idCity' => 4,
            'name' => 'Barranquilla',
            'idCountry' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        City::create([
            'idCity' => 5,
            'name' => 'Cartagena',
            'idCountry' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        City::create([
            'idCity' => 6,
            'name' => 'Santa Marta',
            'idCountry' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        City::create([
            'idCity' => 7,
            'name' => 'Buenos Aires',
            'idCountry' => 2,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        City::create([
            'idCity' => 8,
            'name' => 'Mar del Plata',
            'idCountry' => 2,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
