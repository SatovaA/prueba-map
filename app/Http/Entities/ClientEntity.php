<?php

namespace App\Http\Entities;

use App\Models\Client;
use App\Models\Route;

class ClientEntity
{
    /**
     * Metodo para guardar informacion en la base de datos tabla Clientes
     * @param $request
     * @return void
     */
    public function createClient($request)
    {
        $client = new Client();
        $this->extracted($request, $client);
    }

    /**
     * Trae todos los registros de clientes
     * @return mixed
     */
    public function allClient()
    {
        return Client::join('routes', 'routes.idRoute','=', 'clients.idRoute')
            ->join('cities', 'cities.idCity', '=', 'routes.idCity')
            ->join('countries', 'countries.idCountry', '=', 'cities.idCountry')
            ->select('clients.idClient','clients.name', 'surname', 'phone', 'countries.name as nameCountry',
                'cities.name as nameCity', 'routes.idRoute', 'clients.status', 'clients.document')
            ->get();
    }

    /**
     * Trae registros por clave primaria
     * @param $id
     * @return mixed
     */
    public function clientEdit($id)
    {
        return Client::join('routes', 'routes.idRoute','=', 'clients.idRoute')
            ->join('cities', 'cities.idCity', '=', 'routes.idCity')
            ->join('countries', 'countries.idCountry', '=', 'cities.idCountry')
            ->select('clients.name', 'surname', 'phone', 'countries.idCountry', 'cities.idCity', 'clients.status',
                'clients.document')
            ->where('clients.idClient', $id)
            ->first();
    }

    /**
     * Metodo para realizar actualizacion
     * @param $request
     * @param $id
     * @return void
     */
    public function updateClient($request, $id)
    {
        $client = Client::find($id);
        $this->extracted($request, $client);
    }

    /**
     * @param $request
     * @param $client
     * @return void
     */
    private function extracted($request, $client): void
    {
        $client->idRoute = $request->idRoute;
        $client->document = $request->document;
        $client->name = $request->name;
        $client->surname = $request->surname;
        $client->phone = $request->phone;
        $client->status = $request->status;
        $client->save();
    }

}
