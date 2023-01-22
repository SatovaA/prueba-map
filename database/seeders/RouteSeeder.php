<?php

namespace Database\Seeders;

use App\Models\Route;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Route::create([
            'idRoute' => 1,
            'idCity' => 1,
            'latitude' => 4.60971,
            'length' => -74.08175,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        Route::create([
            'idRoute' => 2,
            'idCity' => 2,
            'latitude' => 6.25184,
            'length' => -75.56359,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        Route::create([
            'idRoute' => 3,
            'idCity' => 3,
            'latitude' => 3.43722,
            'length' => -76.5225,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        Route::create([
            'idRoute' => 4,
            'idCity' => 4,
            'latitude' => 10.96854,
            'length' => -74.78132,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        Route::create([
            'idRoute' => 5,
            'idCity' => 5,
            'latitude' => 10.39972,
            'length' => -75.51444,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        Route::create([
            'idRoute' => 6,
            'idCity' => 6,
            'latitude' => 11.24079,
            'length' => -74.19904,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        Route::create([
            'idRoute' => 7,
            'idCity' => 7,
            'latitude' => -34.61315,
            'length' => -58.37723,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        Route::create([
            'idRoute' => 8,
            'idCity' => 8,
            'latitude' => -38.00042,
            'length' => -57.5562,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
