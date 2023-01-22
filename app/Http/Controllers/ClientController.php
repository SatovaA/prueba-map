<?php

namespace App\Http\Controllers;

use App\Http\Entities\ClientEntity;
use App\Http\Entities\CountryEntity;
use App\Http\Entities\RouteEntity;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    private $countryEntity;
    private $clientEntity;
    private $routeEntity;

    public function __construct()
    {
        $this->countryEntity = new CountryEntity();
        $this->clientEntity = new ClientEntity();
        $this->routeEntity = new RouteEntity();
    }

    public function index()
    {
        $clients = $this->clientEntity->allClient();
        return view('pages.clients.list', compact('clients'));
    }

    /**
     * Metodo para mostrar formulario de creacion
     * @return Application|Factory|View
     */
    public function formCreate()
    {
        $countries = $this->countryEntity->allCountries();
        return view('pages.clients.create', compact('countries'));
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function jsonCountryRoute($id): JsonResponse
    {
        $cities = $this->countryEntity->allCitiesRoute($id);
        return response()->json($cities);
    }

    public function postCreate(Request $request): RedirectResponse
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'surname' => 'required',
                'idCountry' => 'required',
                'phone' => 'required',
                'status' => 'required'
            ]);

            if (!$validator->fails()) {
                $this->clientEntity->createClient($request);
                alert()->success('Exitoso', 'La información se registro correctamente');
                return redirect()->route('get_list_client');
            } else {
                alert()->info('Notificación', 'Existen campos vacios, por favor verifique!!');
                return Redirect::back();
            }
        }catch (\Exception $e) {
            alert()->error('Notificación', 'Existe un error, comuniquese con administracion.');
            return Redirect::back();
        }
    }

    public function formEdit($id)
    {
        $client = $this->clientEntity->clientEdit($id);
        $idCity = $client->idCity;

        $countries = $this->countryEntity->allCountries();
        $cities = $this->countryEntity->allCities($idCity);

        return view('pages.clients.edit', compact('client', 'countries', 'cities', 'id'));
    }

    public function viewMap($id)
    {
        $coordinates = $this->routeEntity->coordinatesMap($id);

        return view('maps', compact('coordinates'));
    }

    public function putEditClient(Request $request, $id): RedirectResponse
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'surname' => 'required',
                'idCountry' => 'required',
                'phone' => 'required',
                'status' => 'required'
            ]);

            if (!$validator->fails()) {
                $this->clientEntity->updateClient($request, $id);
                alert()->success('Exitoso', 'La información se registro correctamente');
                return redirect()->route('get_list_client');
            } else {
                alert()->info('Notificación', 'Existen campos vacios, por favor verifique!!');
                return Redirect::back();
            }
        }catch (\Exception $e) {
            alert()->error('Notificación', 'Existe un error, comuniquese con administracion.');
            return Redirect::back();
        }
    }
}
