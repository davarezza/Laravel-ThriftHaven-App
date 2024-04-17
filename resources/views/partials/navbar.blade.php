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
                <input type="text" name="" id="" class="form-control"
                    placeholder="Cari di ThriftHaven" data-bs-toggle="modal" data-bs-target="#exampleModalNavbar">
                <div class="wrap-icon-search">
                    <img class="img-search" src="{{ asset('assets/img/3.png') }}" alt="">
                </div>
            </div>
            <div class="wrap-img-shop mx-2" onclick="cartHover()">
                <img class="img-shop" src="{{ asset('assets/img/4.png') }}" alt="">
            </div>
            <span class="mx-2 line">|</span>

            @auth
                @if (auth()->user()->role === 'admin')
                    <div class="avatar-admin-nav mx-3 shadow rounded-circle" onclick="avatarHover()">
                        @if ($image)
                            <img src="{{ asset('userProfile/' . $image) }}" class="w-100 rounded-circle" alt="">
                        @else
                            <img src="{{ asset('assets/img/male.svg') }}" class="w-100 rounded-circle" alt="">
                        @endif
                    </div>
                @elseif(auth()->user()->role === 'seller')
                    <div class="avatar-admin-nav mx-3 shadow rounded-circle" onclick="avatarHover()">
                        @if ($image)
                            <img src="{{ asset('userProfile/' . $image) }}" class="w-100 rounded-circle" alt="">
                        @else
                            <img src="{{ asset('assets/img/male.svg') }}" class="w-100 rounded-circle" alt="">
                        @endif
                    </div>
                @elseif(auth()->user()->role === 'customer')
                    <div class="avatar-admin-nav mx-3 shadow rounded-circle" onclick="avatarHover()">
                        @if ($image)
                            <img src="{{ asset('userProfile/' . $image) }}" class="w-100 rounded-circle" alt="">
                        @else
                            <img src="{{ asset('assets/img/male.svg') }}" class="w-100 rounded-circle" alt="">
                        @endif
                    </div>
                @endif
            @else
                <div class="d-flex">
                    <a href="{{ route('login') }}" class="btn fw-bold mx-3">Masuk</a>
                    <a href="{{ route('register') }}" class="btn fw-bold text-white">Daftar</a>
                </div>
            @endauth
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

    <div class="avatar-bar flex-column justify-content-between align-items-center" id="avatarBar">
        @auth
            @if (auth()->user()->role === 'admin')
                <a href="{{ route('admin.dashboard') }}" class="dropdown-item text-center text-decoration-none text-dark"
                    style="border-bottom: 1px solid #ccc; padding-bottom: 10px;"><i class='bx bxs-dashboard'></i>
                    Dashboard</a>
            @elseif(auth()->user()->role === 'seller')
                <a href="#" class="dropdown-item text-center text-decoration-none text-dark"
                    style="border-bottom: 1px solid #ccc; padding-bottom: 10px;"><i class='bx bxs-dashboard'></i>
                    Dashboard</a>
            @elseif(auth()->user()->role === 'customer')
                <a href="{{ route('profile') }}" class="dropdown-item text-center text-decoration-none text-dark"
                    style="border-bottom: 1px solid #ccc; padding-bottom: 10px;"><i class='bx bx-user'></i> Profile</a>
            @endif
            <hr class="my-1">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item" style="border-bottom: 1px solid #333; padding-bottom: 10px;"><i
                        class='bx bx-log-out mx-1'></i> Logout</button>
            </form>
            <hr class="my-2">
            <p class="fw-bold text-uppercase text-center text-dark">
                {{ auth()->user()->role }}
            </p>
        @endauth
    </div>
</div>
