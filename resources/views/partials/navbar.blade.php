<div class="header">
    <div class="item-header-1 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <img class="mx-2" src="{{ asset('assets/img/1.png') }}" alt="">
            <span>Download Thrifthaven App</span>
        </div>

        <div class="d-flex">
            <span class="mx-3">Tentang Thrifthaven</span>
            <span class="mx-3">Mulai Berjualan</span>
            <span class="mx-3">Laporkan Isu</span>
        </div>
    </div>

    <div class="item-header-2 d-flex flex-column">
        <div class="d-flex justify-content-between align-items-center">
            <img class="img-tokopedia" src="{{ asset('assets/img/2.png') }}" alt="">
            <span class="mx-2 text-category">Kategori</span>
            <div class="wrap-search">
                <input type="text" name="" id="" class="form-control" placeholder="Cari di ThriftHaven" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <div class="wrap-icon-search">
                    <img class="img-search" src="{{ asset('assets/img/3.png') }}" alt="">
                </div>
            </div>
            <div class="wrap-img-shop mx-2" onclick="cartHover()">
                <img class="img-shop" src="{{ asset('assets/img/4.png') }}" alt="">
            </div>
            <span class="mx-2 line">|</span>

            <div class="d-flex">
                <button class="btn fw-bold mx-3">Masuk</button>
                <button class="btn fw-bold text-white">Daftar</button>
            </div>
        </div>
        <div class="text-under-search d-flex my-2">
            <span class="mx-2 fw-bold">Monitor</span>
            <span class="mx-2 fw-bold">Laptop</span>
            <span class="mx-2 fw-bold">Sepeda Kayuh</span>
            <span class="mx-2 fw-bold">Baju Kokoh</span>
            <span class="mx-2 fw-bold">Handphone</span>
            <span class="mx-2 fw-bold">Celana Jeans</span>
        </div>
    </div>

    <div class="menu-bar flex-column justify-content-between align-items-center" id="menuBar">
        <img class="mt-3" src="{{ asset('assets/img/5.png') }}" alt="">
        <h4 class="mt-2 fw-bold">Wah keranjang belanjamu kosong</h4>
        <p class="text-center text-muted">Yuk, isi dengan barang-barang impianmu!</p>
        <button class="btn fw-bold mb-3">Mulai Belanja</button>
    </div>
</div>

<!-- Search Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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