@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Trains</h1>
        <ul class="d-flex flex-wrap list-unstyled">
            @foreach ($trains as $train)
            <div class="col-3 p-3">
                <div class="card p-4">
                    <li class="list-none">
                        <p><strong>Azienda:</strong><br>{{ $train->company }}</p>
                        <p><strong>Stazione di Partenza:</strong><br>{{ $train->departure_station }}</p>
                        <p><strong>Stazione di Arrivo:</strong><br>{{ $train->arrival_station }}</p>
                        <p><strong>Orario di Partenza:</strong><br>{{ $train->departure_time }}</p>
                        <p><strong>Orario di Arrivo:</strong><br>{{ $train->arrival_time }}</p>
                        <p><strong>Codice Treno</strong><br>{{ $train->train_code }}</p>
                        @if($train->cancelled === 0)
                        <p class="text-danger">Tratta cancellata</p>
                        @else
                        <p class="text-success">Tratta regolare</p>
                        @endif
                    </li>
                </div>
            </div>
            @endforeach
        </ul>
    </div>
</div>
@endsection