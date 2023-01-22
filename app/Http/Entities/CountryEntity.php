<?php

namespace App\Http\Entities;

use App\Models\City;
use App\Models\Country;

class CountryEntity
{
    public function allCountries()
    {
        return Country::get();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function allCities($id)
    {
        return City::select('idCity', 'name')->where('idCountry', $id)->get();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function allCitiesRoute($id)
    {
        return City::select('cities.idCity', 'cities.name', 'routes.idRoute')
            ->join('routes', 'routes.idCity', '=', 'cities.idCity')
            ->where('idCountry', $id)->get();
    }

}
