@extends('layouts.app')

@section('style')
@endsection

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Rutas</h6>
            </div>
            <div class="card-body">
                <form action="{{route('put_route', $id)}}" method="POST" id="formRoute">
                    @csrf
                    {!! Form::hidden('_method', 'PUT') !!}
                    <div class="form-group">
                        <label for="exampleInputPassword1">País</label>
                        <select class="form-control" id="idCountry" name="idCountry"
                                onchange="landingCountry(this.value)" required>

                            @foreach($countries as $country)
                                @if($country->idCountry == $route->idCountry)
                                    <option value="{{$country->idCountry}}" selected>{{$country->name}}</option>
                                @else
                                    <option value="{{$country->idCountry}}">{{$country->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ciudad</label>
                        <select class="form-control" id="id_city" name="id_city">
                            @foreach($cities as $city)
                                @if($city->idCity == $route->idCity)
                                    <option value="{{$city->idCity}}" selected>{{$city->name}}</option>
                                @else
                                    <option value="{{$city->idCity}}">{{$city->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Latitud</label>
                        <input type="text" class="form-control" id="latitude" name="latitude"
                               value="{{$route->latitude}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Longitud</label>
                        <input type="text" class="form-control" id="length" name="length" value="{{$route->length}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Estado</label>
                        <select class="form-control" id="status" name="status"
                                required>
                            @if($route->status == 1)
                                <option value="1" selected>Activo</option>
                                <option value="0">Inactivo</option>
                            @else
                                <option value="1">Activo</option>
                                <option value="0" selected>Inactivo</option>
                            @endif
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" id="saveRoute">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Fin Page Content -->

@endsection

@section('script')
    <script src="{{asset('js/validation/formRoute.js')}}"></script>

@endsection


