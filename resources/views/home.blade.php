@extends('layouts.main')

@section('title')
    <title>{{ config('app.name') }} - Home</title>
@endsection

@section('container')
    @include('partials.carousel')
    <div class="trending mt-3 py-3">
        @include('partials.firstcard')
    </div>

    <div class="wrap-affix mt-4">
        <div class="d-flex" data-spy="affix" data-offset-top="1200">
            <div class="position-relative mr-3 box-affix bg-affix1">
                <div class="line1"></div>
                <h4>For Your</h4>
            </div>
            <div class="position-relative mr-3 box-affix bg-affix2">
                <div class="line1"></div>
                <h4>Spesial Diskon</h4>
            </div>
        </div>

        <div class="row mx-0 mt-5">
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="assets/img/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="assets/img/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="assets/img/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="assets/img/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="assets/img/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="assets/img/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-0 mt-2">
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="assets/img/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="assets/img/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="assets/img/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="assets/img/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="assets/img/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 pl-0">
                <div class="card">
                    <img src="assets/img/12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Kaos Cowo trending</h6>
                        <div class="d-flex">
                            <span class="badge badge-pill"
                                style="background-color: #ff00d13b; color: d50000;">47%</span>
                            <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                        </div>
                        <h6 class="mt-1">Rp 40.000</h6>
                        <div class="d-flex align-items-center">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <img class="mr-1" width="10" height="10" src="assets/img/icon-bintang.png" alt="">
                            <span style="color: #989898;">(14)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mx-0 mt-5 justify-content-center">
            <button class="btn btn-green">Muat Lebih Banyak</button>
        </div>
    </div>

    <div class="kategory-foot">
        <div class="row mx-0">
            <div class="d-flex w-100 justify-content-between align-items-center">
                <h4 class="font-weight-bold" style="font-size: 20px;">Kategory</h4>
                <h4 style="color: #03ac0e;">Lihat Semua</h4>
            </div>
        </div>
        <div class="border p-3">
            <div class="row mx-0 p-2 border-bottom">
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>

            </div>
            <div class="row mx-0 p-2 border-bottom">
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>

            </div>
            <div class="row mx-0 p-2 border-bottom">
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>

            </div>
            <div class="row mx-0 p-2 border-bottom">
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>

            </div>
            <div class="row mx-0 p-2 border-bottom">
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="d-flex align-items-center">
                        <div class="mr-4" style="width: 2px; height: 40px; background-color: #4950572e;"></div>
                        <img class="mr-3" src="assets/img/6.png" alt="">
                        <h4 class="font-weight-normal">Fashion Wanita</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="kategory-foot2">
        <div class="row mx-0">
            <div class="d-flex justify-content-between align-items-center w-100">
                <div>
                    <h4 class="font-weight-bold" style="color: #ff8b00;">Punya Toko Online? Buka cabangnya di Tokopedia
                    </h4>
                    <h5 class="mt-5 font-weight-normal">Mudah, nyaman dan bebas komisi transaksi. <span
                            class="font-weight-bold">GRATIS!</span> </h5>
                    <div class="d-flex align-items-center">
                        <button class="btn mr-4 text-white" style="background-color: #03ac0e;">Buka Toko GRATIS</button>
                        <a href="" style="color: #03ac0e;">Pelajari lebih lanjut</a>
                    </div>
                </div>
                <img src="assets/img/17.png" alt="">
            </div>


        </div>


    </div>

    <hr style="position: relative; top: 190px; border-top: 1px dashed black; margin: 10px 20px;">

    <div class="kategory-foot3">
        <p>Belanja di Tokopedia Sebagai Solusi Belanja Mudah dan Aman</p>
        <p>Tokopedia merupakan salah satu e-commerce di Indonesia yang perkembangannya terhitung cepat, menjadikannya
            sebagai marketplace pilihan bagi banyak masyarakat Indonesia. Hal ini disebabkan kehadiran Tokopedia membuat
            pengalaman belanja online para penggunanya menjadi mudah, aman, dan efisien. Tersedia berbagai fitur dan
            metode pembayaran yang dapat Anda pilih, untuk memastikan kegiatan belanja Anda dapat dilakukan senyaman
            mungkin. Baik itu melalui transfer bank yang bisa dilakukan menggunakan rekening dari berbagai bank yang
            tersedia, uang elektronik seperti OVO, hingga cicilan. Sistem berbelanja di Tokopedia terintegrasi pula
            dengan sistem beberapa jasa ekspedisi. Kerjasama yang dijalin ini memungkinkan Tokopedia untuk memberikan
            penawaran pengiriman gratis, dan memungkinkan pengguna yang berbelanja untuk terus melacak status pengiriman
            produk yang mereka beli. Jadi, produk apapun yang dibeli di Tokopedia baik itu pakaian bayi, aksesoris
            mobil, aksesoris kamera, celana, jam, hingga peralatan elektronik seperti kabel dan peralatan gaming, atau
            makanan sekali pun dapat terus Anda lacak keberadaannya untuk memastikan akan sampai dengan aman. Data
            pribadi dan seluruh transaksi yang sudah maupun yang akan Anda lakukan di Tokopedia dilindungi oleh
            kebijakan privasi Tokopedia, sehingga tak perlu khawatir data Anda akan jatuh ke pihak yang tidak
            bertanggungjawab dan/atau disalahgunakan. Karena faktor-faktor tersebut lah, Tokopedia menjadi solusi untuk
            belanja online dengan mudah dan aman.

            Kini, tak perlu ragu lagi untuk membeli semua kebutuhan rumah tangga atau keperluan pribadimu di website
            jual beli online terpercaya, Tokopedia. Karena dengan berbelanja di Waktu Indonesia Belanja dari Tokopedia.
            Kami menjamin semua produk yang kami tawarkan memiliki harga lebih murah dibandingkan dengan waktu belanja
            pada umumnya. Selain itu, nikmati pula membeli aneka barang kebutuhan dengan mudah, lengkap, praktis dan
            aman dengan penawaran diskon Tokopedia yang melimpah. Segera nikmati pengalaman berbelanja online dengan
            ribuan promo belanja Tokopedia yang siap memanjakanmu, dengan membeli semua produk berkualitas di bawah
            harga normal. Mulai dari produk kosmetik, peralatan rumah tangga, elektronik, fashion, perlengkapan ibu dan
            bayi, makanan dan minuman semuanya tersedia lengkap dalam satu aplikasi saja. Tak perlu repot, tak perlu
            ragu, ribuan promo Tokopedia serta cashback Tokopedia hingga ratusan ribu rupiah akan membawamu ke
            pengalaman belanja online yang lebih untung. Tak tanggung-tanggung, kamu juga bisa menikmati bebas ongkir
            pengiriman nol rupiah ke semua wilayah di Indonesia lho. Tunggu apa lagi? Cek segera campaign spesial Waktu
            Indonesia Belanja dari Tokopedia di ponsel kesayanganmu dan nikmati promo WIB dengan diskon mencapai 90%!
        </p>

        <a href="" style="color: #03ac0e;">Selengkapnya</a>

        <div class="row mx-0 mt-5">
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <img class="mr-3" src="assets/img/18.png" alt="">
                    <div class="d-flex flex-column">
                        <span class="mb-3 font-weight-bold" style="color: #03ac0e;">Transparent</span>
                        <p>Pembayaran Anda baru saja diteruskan kepenjual setelah barang diterima</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <img class="mr-3" src="assets/img/18.png" alt="">
                    <div class="d-flex flex-column">
                        <span class="mb-3 font-weight-bold" style="color: #03ac0e;">Transparent</span>
                        <p>Pembayaran Anda baru saja diteruskan kepenjual setelah barang diterima</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <img class="mr-3" src="assets/img/18.png" alt="">
                    <div class="d-flex flex-column">
                        <span class="mb-3 font-weight-bold" style="color: #03ac0e;">Transparent</span>
                        <p>Pembayaran Anda baru saja diteruskan kepenjual setelah barang diterima</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mx-0 mt-5" style="padding: 50px;">
            <div class="col-3">
                <div class="d-flex flex-column">
                    <h4 class="font-weight-bold">Tokopedia</h4>
                    <h5>Tentang tokopedia</h5>
                    <h5>Tentang tokopedia</h5>
                    <h5>Tentang tokopedia</h5>
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex flex-column">
                    <h4 class="font-weight-bold">Tokopedia</h4>
                    <h5>Tentang tokopedia</h5>
                    <h5>Tentang tokopedia</h5>
                    <h5>Tentang tokopedia</h5>
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex flex-column">
                    <h4 class="font-weight-bold">Tokopedia</h4>
                    <h5>Tentang tokopedia</h5>
                    <h5>Tentang tokopedia</h5>
                    <h5>Tentang tokopedia</h5>
                </div>
            </div>

            <div class="col-3">
                <div class="d-flex flex-column align-items-center">
                    <img src="assets/img/21.png" width="400" alt="">
                    <div class="d-flex mt-3">
                        <img width="150" class="mr-3" src="assets/img/22.png" alt="">
                        <img width="150" src="assets/img/23.png" alt="">
                    </div>
                    <span>2019 - 2020 Tokopedia</span>
                    <div class="d-flex align-items-center mt-3">
                        <span class="text-white font-weight-bold p-2 mr-3 rounded"
                            style="background-color: #03ac0e;">Indonesia</span>
                        <span>English</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection