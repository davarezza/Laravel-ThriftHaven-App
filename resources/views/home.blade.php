@extends('layouts.main')

@section('title')
    <title>Home | {{ config('app.name') }}</title>
@endsection

@section('container')
    @include('partials.carousel')
    <div class="trending mt-3 py-4">
        @include('partials.firstcard')
    </div>

    <div class="wrap-affix mt-4">
        @include('partials.secondcard')
    </div>

    <div class="kategory-foot2">
        <div class="row mx-0">
            <div class="d-flex justify-content-between align-items-center w-100">
                <div>
                    <h4 class="fw-bold" style="color: #ff8b00;">Punya Toko Online? Buka cabangnya di Tokopedia
                    </h4>
                    <h6 class="mt-3 fw-normal mb-3 text-secondary">Mudah, nyaman dan bebas komisi transaksi. <span
                            class="fw-bold">GRATIS!</span> </h6>
                    <div class="d-flex align-items-center">
                        <button class="btn text-white" style="background-color: #03ac0e;">Buka Toko <span class="fw-bold">GRATIS</span></button>
                        <a class="foot-href" href="">Pelajari lebih lanjut</a>
                    </div>
                </div>
                <img src="assets/img/17.png" alt="">
            </div>


        </div>


    </div>

    <hr style="position: relative; top: 10px; border-top: 1px dashed black; margin: 10px 20px;">

    @include('partials.footer')
@endsection