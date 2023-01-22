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
     * Metodo para traer las ciudades por pais
     * @param $id
     * @return mixed
     */
    public function allCities($id)
    {
        return City::select('idCity', 'name')->where('idCountry', $id)->get();
    }

    /**
     * Metodo para trae ciudades ligadas a la rutas
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
