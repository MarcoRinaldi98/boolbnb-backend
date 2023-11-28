@extends('layouts.admin')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Foto</th>
                <th scope="col">Nome</th>
                <th scope="col">Rooms</th>
                <th scope="col">Beds</th>
                <th scope="col">Bath</th>
                <th scope="col">MQ</th>
                <th scope="col">Address</th>
                <th scope="col">Latitudine</th>
                <th scope="col">Longitudine</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($apartments as $apartment)
                <tr>
                    <td>{{ $apartment->id }}</td>
                    <td><img src="{{ $apartment->photo }}" alt="foto" width="100px" height="120px"></td>
                    <td>{{ $apartment->name }}</td>
                    <td>{{ $apartment->rooms }}</td>
                    <td>{{ $apartment->beds }}</td>
                    <td>{{ $apartment->bathrooms }}</td>
                    <td>{{ $apartment->mq }}</td>
                    <td>{{ $apartment->address }}</td>
                    <td>{{ $apartment->lat }}</td>
                    <td>{{ $apartment->lon }}</td>
                    <td>
                        <a class="btn btn-primary"
                            href="{{ route('admin.apartments.show', ['apartment' => $apartment->slug]) }}">VEDI</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
