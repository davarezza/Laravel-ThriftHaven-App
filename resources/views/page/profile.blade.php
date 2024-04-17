@extends('layouts.main')

@section('title')
    <title>Profile | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}" />
@endsection

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-5 py-3">
            @if(Session::get('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="w-100 rad bg-white overflow-hidden shadow-sm profile-card">
                <div class="profile-cover position-relative" style="background-image: url({{ asset('assets/img/slide/mainhero.png') }})">
                    <div class="overlay-warning"></div>
                </div>
                <div class="profile-body bg-white px-3">
                    <div class="position-relative" style="top: -50px;">
                        <div class="avatar-profile d-inline-block overflow-hidden">
                            @if($image)
                                <img src="{{ asset('userProfile/'.$image) }}" class="w-100" alt="">
                            @else
                                <img src="{{ asset('assets/img/male.svg') }}" class="w-100" alt="">
                            @endif
                        </div>
                        <div class="name-profile mx-2 position-absolute d-inline-block" style="top: 20px;">
                            <h4 class="text-white"> {{ $name }} <span class="text-white text-uppercase" style="font-size: .8rem;">({{ $user_role }})</span></h4>
                            <p class="text-dark" style="font-size: .8rem;"><i class="fas fa-envelope text-warning"></i> {{ $email }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-profile text-center mt-4" onclick="document.getElementById('imageInput').click()">Change Image</div>
            <form action="{{ route('profile.changeImage') }}" method="post" enctype="multipart/form-data" id="imageForm" style="display: none;">
                @csrf
                @method('patch')
                <input type="file" name="image" class="form-control" id="imageInput" onchange="document.getElementById('imageForm').submit()">
            </form>            
        </div>

        <div class="col-md-7 py-3">
            <form class="form-profile" action="{{ route('profile.update') }}" method="post">
                @csrf
                @method("patch")
                <h3 class="text-capitalize">{{ $user_role }} Biodata</h3>
                <div class="border rounded p-4">
                    <div class="form-group mb-3">
                        <label for="name" class="form-label text-capitalize">Nama {{ $user_role }}</label>
                        <input required type="text" value="{{ old('name', $name) }}" name="name" id="name" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label text-capitalize">Email {{ $user_role }}</label>
                        <input required type="email" value="{{ old('email', $email) }}" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Old Password</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="password_new" class="form-label">New Password</label>
                        <input type="password" name="password_new" id="password_new" class="form-control @error('password_new') is-invalid @enderror">
                        @error('password_new')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="px-5 btn-profile-save">Save</button>
                    <a href="{{ route('home') }}" class="btn btn-info px-5">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const imageInput = document.getElementById('imageInput');
    const imageForm = document.getElementById('imageForm');

    imageInput.addEventListener('change', function() {
        imageForm.submit();
    });
});
</script>
@endsection