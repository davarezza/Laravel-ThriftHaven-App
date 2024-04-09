<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" /> --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    {{-- <link rel="icon" type="image/x-icon" class="rounded-circle" href="{{ asset('favicon.ico') }}" /> --}}
  </head>
  <body>
    <div id="overlay"></div>

    @include('partials.navbar')

    @yield('container')

    <!-- Search Modal -->
<div class="modal fade" id="exampleModalNavbar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content m-c-head">
          <div class="d-flex justify-content-between">
              <span class="fw-bold text-dark">Terakhir Dicari</span>
              <span class="fw-bold text-danger">Hapus Semua</span>
          </div>
          <span class="mx-2 mt-2 fs-10">Jersey sepeda</span>
          <span class="mx-2 mt-2 fs-10">Lampu Emergency</span>
          <span class="fw-bold my-2 text-dark">Populer</span>
          <div class="d-flex flex-wrap">
              <button class="btn">text button</button>
              <button class="btn mx-2">text button</button>
              <button class="btn">text button</button>
          </div>
      </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  {{-- <script src="{{ asset('assets/js/aos.js') }}"></script> --}}
  <script src="{{ asset('assets/js/main.js') }}"></script>
  </body>
</html>