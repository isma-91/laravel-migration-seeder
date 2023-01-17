@extends('guest.layouts.base')

@section('content')
    <ul>
        @foreach ($trains as $train)
            <li class="card">

                @if ($train->deleted === 1)
                    <p>Agenzia: {{ $train->agency }}</p>
                    <p>Stazione di partenza: {{ $train->departure_station }}</p>
                    <p>Stazione di arrivo: {{ $train->arrival_station }}</p>
                    <p>Orario di partenza: {{ $train->departure_time }}</p>
                    <p>TRENO CANCELLATO</p>
                @else
                    <p>Agenzia: {{ $train->agency }}</p>
                    <p>Stazione di partenza: {{ $train->departure_station }}</p>
                    <p>Stazione di arrivo: {{ $train->arrival_station }}</p>
                    <p>Orario di partenza: {{ $train->departure_time }}</p>
                    <p>Orario di arrivo: {{ $train->arrival_time }}</p>
                    <p>Codice treno: {{ $train->train_code }}</p>
                    <p>Numero carrozze: {{ $train->number_of_carriages }}</p>
                    @if ($train->in_time === 1)
                        <p>Stato: in orario</p>
                    @else
                        <p>Stato: in ritardo!</p>
                    @endif
                @endif

            </li>
        @endforeach
    </ul>
@endsection
