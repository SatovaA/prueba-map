<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'document' => 12345,
            'name' => 'Andrea',
            'surname' => 'Satova',
            'phone' => '1234567890',
            'idRoute' => 1,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        Client::create([
            'document' => 1024558634,
            'name' => 'Paola',
            'surname' => 'Romero',
            'phone' => '2345678901',
            'idRoute' => 2,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        Client::create([
            'document' => 344546456,
            'name' => 'Juan',
            'surname' => 'Prada',
            'phone' => '3456789012',
            'idRoute' => 3,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        Client::create([
            'document' => 65453443,
            'name' => 'Mario',
            'surname' => 'Gonzales',
            'phone' => '4567890123',
            'idRoute' => 4,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        Client::create([
            'document' => 675654,
            'name' => 'Maria',
            'surname' => 'Perez',
            'phone' => '5678901234',
            'idRoute' => 5,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        Client::create([
            'document' => 7654443,
            'name' => 'Paola',
            'surname' => 'Gutierrez',
            'phone' => '7890123456',
            'idRoute' => 6,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        Client::create([
            'document' => 667434534,
            'name' => 'Maria',
            'surname' => 'Saenz',
            'phone' => '1234567890',
            'idRoute' => 7,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        Client::create([
            'document' => 865543,
            'name' => 'Santiago',
            'surname' => 'Niño',
            'phone' => '9012345678',
            'idRoute' => 8,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        Client::create([
            'document' => 7657565,
            'name' => 'Carlos',
            'surname' => 'Mendez',
            'phone' => '1234567890',
            'idRoute' => 3,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        Client::create([
            'document' => 9876543,
            'name' => 'Bryan',
            'surname' => 'Santos',
            'phone' => '9012345678',
            'idRoute' => 6,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
