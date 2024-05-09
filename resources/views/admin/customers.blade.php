@extends('layouts.master')

@section('title')
    <title>List Customer | {{ config('app.name') }}</title>
@endsection

@section('container')
    <h2>List Customer</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Seller Applying</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $key => $data)
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
                <td>Not currently applying</td>
                <td>
                    <a href="#" class="btn btn-success p-2"><i class='bx bxs-pencil'></i></a>
                    <form action="#" onclick="return confirm('Data akan dihapus ?')" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger p-2"><i class='bx bxs-trash' ></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
