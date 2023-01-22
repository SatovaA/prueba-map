<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'idCountry' => 1,
            'name' => 'Colombia',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        Country::create([
            'idCountry' => 2,
            'name' => 'Argentina',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
