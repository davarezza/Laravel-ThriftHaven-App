<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}" />
</head>

<body>
    <div class="container">
        <div class="image-header">
            <img src="{{ asset('assets/img/2.png') }}" alt="thrifthaven">
        </div><br>
        <div class="row">
            <div class="col-lg-6 col-12  border border-light-subtle border-2 right-grid" style="margin-left: 100px;">
                <div class="right-login">
                    <div class="instagram p-4">
                        <h4 class="text-muted fw-bold">Masuk</h4>
                        <p>Belum punya akun ThriftHaven?<a class="text-decoration-none text-success fw-bold" href="{{ route('register') }}"> Daftar</a></p>
                        {{-- <a class="text-decoration-none btn w-100 fw-bold" href="#"><i class='bx bxl-google'></i> Google</a> --}}
                        <hr class="line">
                        <hr class="line">
                        <form class="form mt-4" action="/login" method="post">
                        @csrf
                            <input type="text" name="email" id="email" class="form-control border-secondary @error('email') is-invalid @enderror"
                                placeholder="Email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <input type="password" name="password" id="password" class="form-control border-secondary mt-2 @error('password') is-invalid @enderror" placeholder="Password" value="{{ old('password') }}">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="button mt-3">
                                <button type="submit" class="btn btn-primary w-100"><i class='bx bx-door-open'></i> Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="account">
                    <p class="text-center">Jika ada kesulitan silahkan hubungi <span class="text-success">Customer Service</span></p>
                </div>
            </div>
            <div class="col-lg-6 col-12 homepage-media">
                <div class="homepage">
                    <img class="home-image" src="{{ asset('assets/img/login.png') }}" alt="insta homepage">
                    <h5 class="text-muted fw-bold">Jual Beli Mudah Hanya di ThriftHaven</h5>
                    <p class="text-secondary">Hidupkan kembali akunmu!</p>
                </div>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        @if (Session::has('success'))
        toastr.options = {
            "positionClass": "toast-top-right",
        };
        toastr.success("{{ Session::get('success') }}");
        @endif

        @if (Session::has('loginError'))
        toastr.options = {
            "positionClass": "toast-top-right",
        };
        toastr.error("{{ Session::get('loginError') }}");
        @endif
   </script>
</body>

</html>
