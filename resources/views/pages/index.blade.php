@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
   <h1>Treni: {{count($trains) }}</h1>
   <div>
    @foreach ($trains as $train)
    <div>
        <h5>Nome Azienda: {{ $train -> azienda}}</h5>
        <p>Codice treno: {{ $train -> codice_treno }}</p>
        <p>Orario di partenza: {{ $train -> orario_partenza}}</p>
        <p>Orario di arrivo: {{ $train -> orario_arrivo}}</p>
        <p>Stazione di partenza: {{ $train -> stazione_di_partenza }}</p>
        <p>Stazione di arrivo: {{ $train -> stazione_di_arrivo }}</p>
        <p>Numero carrozze: {{ $train -> numero_carrozze }}</p>
        <p>Treno in orario: {{ $train -> in_orario }}</p>
    </div>
    @endforeach
    </div>

@endsection
