@extends('layouts.app')

@section('style')
@endsection

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Clientes</h6>
            </div>
            <div class="card-body">
                <div class="col-lg-12" align="center">
                    <a href="{{route('get_register_client')}}" class="btn btn-secondary">Crear Clientes</a>
                </div>
                <br>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Documento</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Pais</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Ubicación</th>
                        <th scope="col">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clients as $client)
                        <tr>
                            <td>{{$client->document}}</td>
                            <td>{{$client->name .' '. $client->surname}}</td>
                            <td>{{$client->phone}}</td>
                            <td>{{$client->nameCountry}}</td>
                            <td>{{$client->nameCity}}</td>
                            <td>
                                @if($client->status == 1)
                                    Activo
                                @else
                                    Inactivo
                                @endif
                            </td>
                            <td>
                                <a href="{{route('get_location_map', $client->idRoute)}}" class="btn btn-default btn-sm">
                                    <span class="fa fa-map-marker"></span>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('get_edit_client', $client->idClient)}}">
                                    <span class="fa fa-user-edit"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Fin Page Content -->

@endsection

@section('script')

@endsection
