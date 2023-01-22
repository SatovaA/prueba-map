<?php

namespace App\Http\Controllers;

use App\Http\Entities\CountryEntity;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    private $countryEntity;

    public function __construct()
    {
        $this->countryEntity = new CountryEntity();
    }

    public function index()
    {
        $countries = $this->countryEntity->allCountries();
        return view('pages.countries.list', compact('countries'));
    }

    /**
     * Metodo para mostrar formulario de creacion
     * @return Application|Factory|View
     */
    public function formCreate()
    {
        return view('pages.countries.create');
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
                'country' => 'required|max:25'
            ]);

            if (!$validator->fails()) {
                $this->countryEntity->createCountry($request);
                alert()->success('Exitoso', 'La información se registro correctamente');
                return redirect()->route('get_list_country');
            } else {
                alert()->info('Notificación', 'El campo es obligatorio.');
                return Redirect::back();
            }
        }catch (\Exception $e) {
            alert()->error('Notificación', 'Existe un error, comuniquese con administracion.');
            return Redirect::back();
        }
    }
}
