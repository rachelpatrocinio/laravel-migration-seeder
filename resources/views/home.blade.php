@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Trains</h1>
        <ul>
            @foreach ($trains as $train)
            <li>
                <p><strong>Azienda:</strong>{{ $train->company }}</p>
                <p><strong>Stazione di Partenza:</strong>{{ $train->departure_station }}</p>
                <p><strong>Stazione di Arrivo:</strong>{{ $train->arrival_station }}</p>
                <p><strong>Orario di Partenza:</strong>{{ $train->departure_time }}</p>
                <p><strong>Orario di Arrivo:</strong>{{ $train->arrival_time }}</p>
                <p><strong>Codice Treno</strong>{{ $train->train_code }}</p>
                @if($train->cancelled === 0)
                <p class="text-danger">Tratta cancellata</p>
                @endif
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection