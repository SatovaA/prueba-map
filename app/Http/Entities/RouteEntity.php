<?php

namespace App\Http\Entities;

use App\Models\Route;

class RouteEntity
{
    /**
     * Metodo de creacion de registros
     * @param $request
     * @return void
     */
    public function createRoute($request)
    {
        $route = new Route();
        $route->idCity = $request->id_city;
        $route->latitude = $request->latitude;
        $route->length = $request->length;
        $route->status = $request->status;
        $route->save();
    }

    /**
     * Trae todas las rutas registradas
     * @return mixed
     */
    public function allRoutes()
    {
        return Route::join('cities', 'cities.idCity', '=', 'routes.idCity')
            ->join('countries', 'countries.idCountry', '=', 'cities.idCountry')
            ->select('routes.latitude', 'routes.length', 'countries.name as nameCountry', 'cities.name as nameCity',
                'routes.status', 'routes.idRoute')
            ->get();
    }

    /**
     * Trae las rutas relacionadas a un cliente
     * @param $id
     * @return mixed
     */
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

    /**
     * Metodo para realizar traer la informacion de rutas por id
     * @param $id
     * @return mixed
     */
    public function formEditRoute($id)
    {
        return Route::join('cities', 'cities.idCity', '=', 'routes.idCity')
            ->join('countries', 'countries.idCountry', '=', 'cities.idCountry')
            ->select('routes.latitude', 'routes.length', 'countries.idCountry', 'cities.idCity',
                'routes.status')
            ->where('idRoute', $id)
            ->first();
    }

    /**
     * Metodo para realizar actualizacion
     * @param $request
     * @param $id
     * @return void
     */
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
