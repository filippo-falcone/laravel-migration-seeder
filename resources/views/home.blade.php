@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
    <div class="container-fluid py-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Operato da</th>
                    <th scope="col">Treno</th>
                    <th scope="col">Vagoni</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Orario di partenza</th>
                    <th scope="col">Orario di arrivo</th>
                    <th scope="col">Info</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{$train->operator}}</td>
                        <td>{{$train->train_code}}</td>
                        <td>{{$train->wagons}}</td>
                        <td>{{$train->departure_station}}</td>
                        <td>{{$train->arrival_station}}</td>
                        <td>{{$train->departure_time}}</td>
                        <td>{{$train->arrival_time}}</td>
                        @if ($train->on_time)
                            <td>In orario</td>
                        @elseif ($train->is_cancelled)
                            <td>Cancellato</td>
                        @else
                            <td>In ritardo</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection