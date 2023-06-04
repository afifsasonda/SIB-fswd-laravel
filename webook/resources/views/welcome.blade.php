<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webook</title>

    {{-- awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- swiper css cdn--}}
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}"/>

    {{-- css style --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- css w3 --}}
    <link rel="stylesheet" href="{{ asset('css/w3.css') }}">


    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

    {{-- feather icons --}}
    <script src="https://unpkg.com/feather-icons"></script>

</head>
<body>
    {{-- navbar start--}}
    <nav class="navbar">
        {{-- navbar nav --}}
        <div class="navbar-nav">
            <div class="navbar-logo">
                <a href="#logo">We<span>BOOK</span>.</a>
            </div>
            <div class="navbar-menu">
                <div class="dropdown">
                    <a onclick="myFunction()" class="dropbtn">Buku🔻</a>
                    <div id="myDropdown" class="dropdown-content">
                      <a href="#">Semua</a>
                      <a href="#">Fiksi</a>
                      <a href="#">Non Fiksi</a>
                      <a href="#">Anak-anak</a>
                      <a href="#">Komik</a>
                    </div>
                </div>
                <a href="#paket" class="paket">Paket</a>
                <a href="#paket" class="promo">Promo</a>
                <a href="#paket" class="ebook">Ebook Gratis</a>
                <a href="#paket" class="blog">Blog</a>
            </div>
        </div>
        <div class="navbar-extra">
            <a href="/user" class="masuk">Masuk</a>
            <a href="#daftar" class="daftar">Daftar</a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    {{-- navbar end --}}
    <section class=" hero" id="home">
        <main class="content">
            {{-- <div class="w3-content w3-display-container" style="max-width:800px">
                <img class="mySlides" src="{{ asset('assets/images/slide2.png') }}" style="width:100%; height:400px">
                <img class="mySlides" src="{{ asset('assets/images/slider1.jpg') }}" style="width:100%; height:400px">
                <img class="mySlides" src="{{ asset('assets/images/slider3.jpg') }}" style="width:100%;height:400px">
                <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:90%">
                    <div class="w3-display-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                    <div class="w3-display-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                </div>
            </div> --}}
            <div class="description">
                <div class="card-search">
                    <form action="">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                      </form>
                </div>
                <h1>We<span>BOOK</span>.</h1>
                <p>Pusatnya Buku Kuliah, Gratis Ongkir Setiap Saat</p>
                <div class="button-buy">
                    <a href="#beli">Beli Buku Sekarang ▶</a>
                </div>
            </div>
            <div class="image-shop">
                <img src="{{ asset('assets/images/gambar.png') }}">
            </div>

        </main>


    </section>
    {{-- <section class=" hero-section" id="home">
        <main class="content">
            @section('dataproduct')
                --Data tidak ditemukan --
            @show
        </main>

    </section> --}}


    {{-- <div>
        @yield('content');
    </div> --}}






    <script>
        feather.replace()
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>

