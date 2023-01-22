@extends('layouts.app')

@section('style')
@endsection

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Crear peliculas</h6>
            </div>
            <div class="card-body">
                <form action="{{route('post_create_route')}}" method="POST" id="formRoute">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputPassword1">País</label>
                        <select class="form-control" id="idCountry" name="idCountry" onchange="landingCountry(this.value)"
                                required>
                            <option value="">Seleccione un país</option>
                            @foreach($countries as $country)
                                <option value="{{$country->idCountry}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ciudad</label>
                        <select class="form-control" id="id_city" name="id_city">
                            <option value="">Seleccione una ciudad</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Latitud</label>
                        <input type="text" class="form-control" id="latitude" name="latitude" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Longitud</label>
                        <input type="text" class="form-control" id="length" name="length" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Estado</label>
                        <select class="form-control" id="status" name="status"
                                required>
                            <option value="">Seleccione un estado</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
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


