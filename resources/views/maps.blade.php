@extends('layouts.app')

@section('style')
    <style>
        #map {
            height: 100%;
        }
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
@endsection

@section('content')

    <input type="hidden" id="lat_map" value="{{$coordinates->latitude}}">
    <input type="hidden" id="lng_map" value="{{$coordinates->length}}">
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{$coordinates->name . ' ' . $coordinates->surname}} -
                    {{$coordinates->nameCountry}}, {{$coordinates->nameCity}}
                </h6>
            </div>
        </div>
    </div>
    <!-- Begin Page Content -->
    <div id="map"></div>
    <!-- Fin Page Content -->

@endsection

@section('script')
    <script type="module" src="{{asset('js/project/maps.js')}}"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfi0fQAIdYYrBxsVr7QTF7jSlFGkxM_ts&callback=initMap&libraries=places&v=weekly"
        defer
    ></script>
@endsection

