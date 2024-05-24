@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Trains</h1>
        <ul>
            @foreach ($trains as $train)
            <li>
                <p>{{ $train->company }}</p>
                <p>{{ $train->departure_station }}</p>
                <p>{{ $train->arrival_station }}</p>
                <p>{{ $train->departure_time }}</p>
                <p>{{ $train->arrival_time }}</p>
                <p>{{ $train->train_code }}</p>
                @if($train->cancelled === 0)
                <p>Tratta cancellata</p>
                @endif
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection