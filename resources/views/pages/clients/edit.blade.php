@extends('layouts.app')

@section('style')
@endsection

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar cliente</h6>
            </div>
            <div class="card-body">
                <form action="{{route('put_client', $id)}}" method="POST" id="formClient">
                    @csrf
                    {!! Form::hidden('_method', 'PUT') !!}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Numero Documento</label>
                        <input type="text" class="form-control" id="document" name="document" value="{{$client->document}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$client->name}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Apellido</label>
                        <input type="text" class="form-control" id="surname" name="surname" value="{{$client->surname}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telefono</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{$client->phone}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">País</label>
                        <select class="form-control" id="idCountry" name="idCountry" onchange="countryClient(this.value)"
                                required>
                            <option value="">Seleccione un país</option>

                            @foreach($countries as $country)
                                @if($country->idCountry == $client->idCountry)
                                    <option value="{{$country->idCountry}}" selected>{{$country->name}}</option>
                                @else
                                    <option value="{{$country->idCountry}}">{{$country->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ciudad</label>
                        <select class="form-control" id="idRoute" name="idRoute">
                            @foreach($cities as $city)
                                @if($city->idCity == $client->idCity)
                                    <option value="{{$city->idCity}}" selected>{{$city->name}}</option>
                                @else
                                    <option value="{{$city->idCity}}">{{$city->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Estado</label>
                        <select class="form-control" id="status" name="status"
                                required>
                            @if($client->status == 1)
                                <option value="1" selected>Activo</option>
                                <option value="0">Inactivo</option>
                            @else
                                <option value="1">Activo</option>
                                <option value="0" selected>Inactivo</option>
                            @endif
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" id="saveClient">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Fin Page Content -->

@endsection

@section('script')
    <script src="{{asset('js/validation/formClient.js')}}"></script>

@endsection


