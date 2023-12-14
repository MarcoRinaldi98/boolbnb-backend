@extends('layouts.admin')

@section('page-title')
    Dettaglio {{ $apartment->name }}
@endsection

@section('content')
    <h1>{{ $apartment->name }}</h1>
    <h2>in {{ $apartment->address }}</h2>
    <div>Stanze: {{ $apartment->rooms }}</div>
    <div>Letti: {{ $apartment->beds }}</div>
    <div>Bagni: {{ $apartment->bathrooms }}</div>
    <h1>{{ $apartment->mq }} mq</h1>
    <h1>Latitudine: {{ $apartment->lat }} - Longitudine: {{ $apartment->lon }}</h1>
@endsection
