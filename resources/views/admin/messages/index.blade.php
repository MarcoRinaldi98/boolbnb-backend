@extends('layouts.admin')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Lastname</th>
                <th scope="col">Email</th>
                <th scope="col">Text</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
                <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->lastname }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->text }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
