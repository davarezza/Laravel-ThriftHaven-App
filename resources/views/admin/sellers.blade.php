@extends('layouts.master')

@section('title')
    <title>List Seller | {{ config('app.name') }}</title>
@endsection

@section('container')
    <h2>List Seller</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sellers as $key => $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    @if ($data->image)
                        <img src="{{ asset('userProfile/' . $data->image) }}" class="w-50" alt="Profile Image" style="max-width: 50px;">
                    @else
                        <img src="{{ asset('assets/img/male.svg') }}" class="w-50" alt="Default Image" style="max-width: 50px;">
                    @endif
                </td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection