@extends('layouts.main')

@section('title')
    <title>Profile | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}" />
@endsection

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-4 py-3">
            <div class="w-100 rad bg-white overflow-hidden shadow-sm profile-card">
                <div class="profile-cover position-relative" style="background-image: url({{ asset('assets/img/slide/mainhero.png') }})">
                    <div class="overlay-warning"></div>
                </div>
                <div class="profile-body bg-white px-3">
                    <div class="position-relative" style="top: -50px;">
                        <div class="avatar-profile d-inline-block overflow-hidden">
                            @if($image)
                                <img src="{{ asset($image) }}" class="w-100" alt="">
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
            <div class="btn-profile text-center mt-4">Change Image</div>
        </div>

        <div class="col-md-8 py-3">
            <form class="form-profile" action="#" method="">
                @csrf
                @method("put")
                <h3>Form {{ $user_role }}</h3>
                <div class="border rounded p-4">
                    <div class="form-group mb-3">
                        <label for="name" class="form-label text-capitalize">Nama {{ $user_role }}</label>
                        <input required type="text" value="{{ $name }}" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label text-capitalize">Email {{ $user_role }}</label>
                        <input required type="email" value="{{ $email }}" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Old Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password_new" class="form-label">New Password</label>
                        <input type="password" name="password_new" id="password_new" class="form-control">
                    </div>
                    <button type="submit" class="px-5 btn-profile-save">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
