<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} - Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}" />
</head>

<body>
    <div class="container">
        <div class="image-header">
            <img src="{{ asset('assets/img/2.png') }}" alt="thrifthaven">
        </div><br>
        <div class="row">
            <div class="col-lg-6 col-12 homepage-media">
                <div class="homepage">
                    <img class="home-image" src="{{ asset('assets/img/login.png') }}" alt="insta homepage">
                    <h5 class="text-muted fw-bold">Jual Beli Mudah Hanya di ThriftHaven</h5>
                    <p class="text-secondary">Gabung dan rasakan kemudahan bertransaksi di ThriftHaven</p>
                </div>
            </div>
            <div class="col-lg-6 col-12  border border-light-subtle border-2 right-grid">
                <div class="right-login">
                    <div class="instagram p-4">
                        <h4 class="text-muted fw-bold">Daftar Sekarang</h4>
                        <p>Sudah punya akun ThriftHaven?<a class="text-decoration-none text-success fw-bold" href="#"> Masuk</a></p>
                        <a class="text-decoration-none btn w-100 fw-bold" href="#"><i class='bx bxl-google'></i> Google</a>
                        <hr class="line">
                        <div class="form mt-4">
                            <input type="text" id="email" class="form-control border-secondary" autocomplete="off"
                                placeholder="Phone number or email">
                            <input type="password" id="password" class="form-control border-secondary mt-2" placeholder="Password">
                            <div class="button mt-3">
                                <button onclick="alertUser()" type="button" class="btn btn-primary w-100"><i class='bx bx-door-open'></i> Daftar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="account">
                    <p class="text-center">Dengan mendaftar saya menyetujui <span class="text-success">Syarat dan Ketentuan serta Kebijakan Privasi</span></p>
                </div>
            </div>

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script>
        const alertUser = () => {
            let email = document.getElementById("email").value
            let password = document.getElementById("password").value
            console.log(email)
            if (email.length === 0 && password.length === 0) {
                alert("Enter Your Username")
            } else {
                alert(email)
            }
        }
    </script>
</body>

</html>
