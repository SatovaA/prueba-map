<?php

namespace App\Http\Entities;

use App\Models\Client;
use App\Models\Route;

class ClientEntity
{
    public function createClient($request)
    {
        $client = new Client();
        $client->idRoute = $request->idRoute;
        $client->name = $request->name;
        $client->surname = $request->surname;
        $client->phone = $request->phone;
        $client->status = $request->status;
        $client->save();
    }

    public function allClient()
    {
        return Client::join('routes', 'routes.idRoute','=', 'clients.idRoute')
            ->join('cities', 'cities.idCity', '=', 'routes.idCity')
            ->join('countries', 'countries.idCountry', '=', 'cities.idCountry')
            ->select('clients.name', 'surname', 'phone', 'countries.name as nameCountry', 'cities.name as nameCity', 'routes.idRoute')
            ->get();
    }

}
