@extends('layouts.app')

@section('style')
@endsection

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Peliculas</h6>
            </div>
            <div class="card-body">
                <div class="col-lg-12" align="center">
                    <a href="" class="btn btn-secondary">Crear pelicula</a>
                </div>
                <br>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Nombre Pelicula</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Actor</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Fin Page Content -->

@endsection

@section('script')

@endsection
