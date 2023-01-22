@extends('layouts.app')

@section('style')
@endsection

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Crear Cliente</h6>
            </div>
            <div class="card-body">
                <form action="{{route('post_create_client')}}" method="POST" id="formClient">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Documento</label>
                        <input type="text" class="form-control" id="document" name="document" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Apellido</label>
                        <input type="text" class="form-control" id="surname" name="surname" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telefono</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">País</label>
                        <select class="form-control" id="idCountry" name="idCountry" onchange="countryClient(this.value)"
                                required>
                            <option value="">Seleccione un país</option>
                            @foreach($countries as $country)
                                <option value="{{$country->idCountry}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ciudad</label>
                        <select class="form-control" id="idRoute" name="idRoute">
                            <option value="">Seleccione una ciudad</option>
                        </select>
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


