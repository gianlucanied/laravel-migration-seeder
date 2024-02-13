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
        <p>Orario di partenza: {{ $train -> orario_partenza}}</p>
        <p>Orario di arrivo: {{ $train -> orario_arrivo}}</p>
    </div>
    @endforeach
    </div>

@endsection
