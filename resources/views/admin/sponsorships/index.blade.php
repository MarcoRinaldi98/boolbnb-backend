@extends('layouts.admin')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Duration</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sponsorships as $sponsorship)
                <tr>
                    <td>{{ $sponsorship->id }}</td>
                    <td>{{ $sponsorship->name }}</td>
                    <td>{{ $sponsorship->price }}</td>
                    <td>{{ $sponsorship->duration }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
