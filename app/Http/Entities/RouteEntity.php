<?php

namespace App\Http\Entities;

use App\Models\Route;

class RouteEntity
{
    public function createRoute($request)
    {
        $route = new Route();
        $route->idCity = $request->id_city;
        $route->latitude = $request->latitude;
        $route->length = $request->length;
        $route->status = $request->status;
        $route->save();
    }

    public function coordinatesMap($id)
    {
        return Route::join('clients', 'clients.idRoute','=', 'routes.idRoute')
            ->join('cities', 'cities.idCity', '=', 'routes.idCity')
            ->join('countries', 'countries.idCountry', '=', 'cities.idCountry')
            ->select('routes.latitude', 'routes.length', 'clients.name', 'clients.surname', 'countries.name as nameCountry',
            'cities.name as nameCity')
            ->where('routes.idRoute', $id)
            ->first();
    }

}
