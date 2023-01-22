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

    public function allRoutes()
    {
        return Route::join('cities', 'cities.idCity', '=', 'routes.idCity')
            ->join('countries', 'countries.idCountry', '=', 'cities.idCountry')
            ->select('routes.latitude', 'routes.length', 'countries.name as nameCountry', 'cities.name as nameCity',
                'routes.status', 'routes.idRoute')
            ->get();
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

    public function formEditRoute($id)
    {
        return Route::join('cities', 'cities.idCity', '=', 'routes.idCity')
            ->join('countries', 'countries.idCountry', '=', 'cities.idCountry')
            ->select('routes.latitude', 'routes.length', 'countries.idCountry', 'cities.idCity',
                'routes.status')
            ->where('idRoute', $id)
            ->first();
    }

    public function updateRoute($request, $id)
    {
        $route = Route::find($id);
        $route->idCity = $request->id_city;
        $route->latitude = $request->latitude;
        $route->length = $request->length;
        $route->status = $request->status;
        $route->save();
    }

}
