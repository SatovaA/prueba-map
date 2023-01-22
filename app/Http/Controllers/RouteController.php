<?php

namespace App\Http\Controllers;

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

class RouteController extends Controller
{
    private $countryEntity;
    private $routeEntity;

    public function __construct()
    {
        $this->countryEntity = new CountryEntity();
        $this->routeEntity = new RouteEntity();
    }

    public function index()
    {
        $routes = $this->routeEntity->allRoutes();
        return view('pages.routes.list', compact('routes'));
    }

    /**
     * Metodo para mostrar formulario de creacion
     * @return Application|Factory|View
     */
    public function formCreate()
    {
        $countries = $this->countryEntity->allCountries();
        return view('pages.routes.create', compact('countries'));
    }

    /**
     * Metodo para guardar paises
     * @param Request $request
     * @return RedirectResponse
     */
    public function postCreate(Request $request): RedirectResponse
    {
        try {
            $validator = Validator::make($request->all(), [
                'idCountry' => 'required',
                'id_city' => 'required',
                'latitude' => 'required',
                'length' => 'required',
                'status' => 'required'
            ]);

            if (!$validator->fails()) {
                $this->routeEntity->createRoute($request);
                alert()->success('Exitoso', 'La información se registro correctamente');
                return redirect()->route('get_list_route');
            } else {
                alert()->info('Notificación', 'Existen campos vacios, por favor verifique!!');
                return Redirect::back();
            }
        }catch (\Exception $e) {
            alert()->error('Notificación', 'Existe un error, comuniquese con administracion.');
            return Redirect::back();
        }
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function jsonCountry($id): JsonResponse
    {
        $cities = $this->countryEntity->allCities($id);
        return response()->json($cities);
    }

    public function formEdit($id)
    {
        $route = $this->routeEntity->formEditRoute($id);
        $idCity = $route->idCity;

        $countries = $this->countryEntity->allCountries();
        $cities = $this->countryEntity->allCities($idCity);

        return view('pages.routes.edit', compact('route', 'countries', 'cities', 'id'));
    }

    public function putCountry(Request $request, $id): RedirectResponse
    {
        try {
            $validator = Validator::make($request->all(), [
                'idCountry' => 'required',
                'id_city' => 'required',
                'latitude' => 'required',
                'length' => 'required',
                'status' => 'required'
            ]);

            if (!$validator->fails()) {
                $this->routeEntity->updateRoute($request, $id);
                alert()->success('Exitoso', 'La información se registro correctamente');
                return redirect()->route('get_list_route');
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
