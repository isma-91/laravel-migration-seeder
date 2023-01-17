@extends('guest.layouts.base')

@section('content')
    <ul class="container">
        @foreach ($trains as $train)
            <li class="card">

                @if ($train->deleted === 1)
                    <p><span class="card-title">Agenzia:</span> {{ $train->agency }}</p>
                    <p><span class="card-title">Stazione di partenza:</span> {{ $train->departure_station }}</p>
                    <p><span class="card-title">Stazione di arrivo:</span> {{ $train->arrival_station }}</p>
                    <p><span class="card-title">Orario di partenza:</span> {{ $train->departure_time }}</p>
                    <p class="danger">TRENO CANCELLATO</p>
                @else
                    <p><span class="card-title">Agenzia:</span> {{ $train->agency }}</p>
                    <p><span class="card-title">Stazione di partenza:</span> {{ $train->departure_station }}</p>
                    <p><span class="card-title">Stazione di arrivo:</span> {{ $train->arrival_station }}</p>
                    <p><span class="card-title">Orario di partenza:</span> {{ substr($train->departure_time, 0, 5) }}</p>
                    <p><span class="card-title">Orario di arrivo:</span> {{ substr($train->arrival_time, 0, 5) }}</p>
                    <p><span class="card-title">Codice treno:</span> {{ $train->train_code }}</p>
                    <p><span class="card-title">Numero carrozze:</span> {{ $train->number_of_carriages }}</p>
                    @if ($train->in_time === 1)
                        <p><span class="card-title">Stato:</span> in orario</p>
                    @else
                        <p><span class="card-title">Stato:</span> in ritardo!</p>
                    @endif
                @endif

            </li>
        @endforeach
    </ul>
@endsection
