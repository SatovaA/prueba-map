@extends('layouts.app')

@section('style')
@endsection

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Rutas</h6>
            </div>
            <div class="card-body">
                <div class="col-lg-12" align="center">
                    <a href="{{route('get_register_route')}}" class="btn btn-secondary">Crear ruta</a>
                </div>
                <br>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Pais</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Longitud</th>
                        <th scope="col">Latitud</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($routes as $route)
                        <tr>
                            <td>{{$route->nameCountry}}</td>
                            <td>{{$route->nameCity}}</td>
                            <td>{{$route->latitude}}</td>
                            <td>{{$route->length}}</td>
                            <td>
                                @if($route->status == 1)
                                    Activo
                                @else
                                    Inactivo
                                @endif
                            </td>
                            <td>
                                <a href="{{route('get_edit_route', $route->idRoute)}}" class="btn btn-default btn-sm">
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
