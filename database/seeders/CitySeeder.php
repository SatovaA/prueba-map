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
            'name' => 'Bogota',
            'idCountry' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        City::create([
            'name' => 'Medellin',
            'idCountry' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        City::create([
            'name' => 'Cali',
            'idCountry' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        City::create([
            'name' => 'Barranquilla',
            'idCountry' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        City::create([
            'name' => 'Buenos Aires',
            'idCountry' => 2,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        City::create([
            'name' => 'Mar del Plata',
            'idCountry' => 2,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
