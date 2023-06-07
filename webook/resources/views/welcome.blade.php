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
    {{-- <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}"/> --}}

    {{-- css style --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- css w3 --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/w3.css') }}"> --}}


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
                <a href="#home" class="paket">Home</a>
                @auth
                <div class="dropdown">
                    <a onclick="myFunction()" class="dropbtn">Buku🔻</a>
                    <div id="myDropdown" class="dropdown-content">
                      <a href="#">Teknologi</a>
                      <a href="#">Kesehatan</a>
                      <a href="#">Olahraga</a>
                      <a href="#">Desain</a>
                      <a href="#">Teknik</a>
                    </div>
                </div>
                <a href="{{ url('/dashboard') }}" class="dashboard">Dashboard</a>
                @endauth
            </div>
        </div>
        <div class="navbar-extra">
            @auth
            <form action="{{ url('/logout') }}" method="POST">
                @csrf
                {{-- <a type="submit" class="masuk">Logout</a> --}}
                <button type="submit" class="btn btn-primary masuk">Logout</button>

            </form>
            @else
            <a href="{{ url('/login') }}" class="masuk">Masuk</a>
            <a href="{{ url('/register') }}" class="daftar">Daftar</a>
            @endauth
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    {{-- navbar end --}}
    <div class=" hero" id="home">
        <div class="content">
            <div class="description">
                <div class="left-description">
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
                    <img src="{{ asset('assets/images/reading_book.png') }}">
                </div>
            </div>
        </div>
    </div>
    <div class="line"></div>
    <div class="container">
        <div class="slider">
            <div class="slide_viewer">
              <div class="slide_group">
                <div class="slide">
                    <img src="{{ asset('assets/images/slide2.png') }}" style="width: 100%" height="400px">
                </div>
                <div class="slide">
                    <img src="{{ asset('assets/images/sldbook2.jpg') }}" style="width: 100%" height="400px">
                </div>
                <div class="slide">
                    <img src="{{ asset('assets/images/sldbook3.jpeg') }}" style="width: 100%" height="400px">
                </div>
              </div>
            </div>
          </div><!-- End // .slider -->

          {{-- <div class="slide_buttons">
          </div> --}}

          <div class="directional_nav">
            <div class="previous_btn" title="Previous">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
                <g>
                  <g>
                    <path fill="#474544" d="M-10.5,22.118C-10.5,4.132,4.133-10.5,22.118-10.5S54.736,4.132,54.736,22.118
                      c0,17.985-14.633,32.618-32.618,32.618S-10.5,40.103-10.5,22.118z M-8.288,22.118c0,16.766,13.639,30.406,30.406,30.406 c16.765,0,30.405-13.641,30.405-30.406c0-16.766-13.641-30.406-30.405-30.406C5.35-8.288-8.288,5.352-8.288,22.118z"/>
                    <path fill="#474544" d="M25.43,33.243L14.628,22.429c-0.433-0.432-0.433-1.132,0-1.564L25.43,10.051c0.432-0.432,1.132-0.432,1.563,0	c0.431,0.431,0.431,1.132,0,1.564L16.972,21.647l10.021,10.035c0.432,0.433,0.432,1.134,0,1.564	c-0.215,0.218-0.498,0.323-0.78,0.323C25.929,33.569,25.646,33.464,25.43,33.243z"/>
                  </g>
                </g>
              </svg>
            </div>
            <div class="next_btn" title="Next">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
                <g>
                  <g>
                    <path fill="#474544" d="M22.118,54.736C4.132,54.736-10.5,40.103-10.5,22.118C-10.5,4.132,4.132-10.5,22.118-10.5	c17.985,0,32.618,14.632,32.618,32.618C54.736,40.103,40.103,54.736,22.118,54.736z M22.118-8.288	c-16.765,0-30.406,13.64-30.406,30.406c0,16.766,13.641,30.406,30.406,30.406c16.768,0,30.406-13.641,30.406-30.406 C52.524,5.352,38.885-8.288,22.118-8.288z"/>
                    <path fill="#474544" d="M18.022,33.569c 0.282,0-0.566-0.105-0.781-0.323c-0.432-0.431-0.432-1.132,0-1.564l10.022-10.035 			L17.241,11.615c 0.431-0.432-0.431-1.133,0-1.564c0.432-0.432,1.132-0.432,1.564,0l10.803,10.814c0.433,0.432,0.433,1.132,0,1.564 L18.805,33.243C18.59,33.464,18.306,33.569,18.022,33.569z"/>
                  </g>
                </g>
              </svg>
            </div>
          </div>
    </div>
    <div class="cards-product">
        <h2>Produk Unggulan</h2>
        <div class="cards">
            <div class="card">
                <img src="{{ asset('assets/images/buku_teknologi_inf.jpg') }}">
                <div class="captions">
                    <h5>Najelaa Shihab</h5>
                    <h5>Teknologi Untuk Masa Depan</h5>
                    <p>Rp.200.000</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('assets/images/buku_teknologi_inf.jpg') }}" alt="">
                <div class="captions">
                    <h5>Najelaa Shihab</h5>
                    <h5>Teknologi Untuk Masa Depan</h5>
                    <p>Rp.200.000</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('assets/images/buku_teknologi_inf.jpg') }}" alt="">
                <div class="captions">
                    <h5>Najelaa Shihab</h5>
                    <h5>Teknologi Untuk Masa Depan</h5>
                    <p>Rp.200.000</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('assets/images/buku_teknologi_inf.jpg') }}" alt="">
                <div class="captions">
                    <h5>Najelaa Shihab</h5>
                    <h5>Teknologi Untuk Masa Depan</h5>
                    <p>Rp.200.000</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('assets/images/buku_teknologi_inf.jpg') }}" alt="">
                <div class="captions">
                    <h5>Najelaa Shihab</h5>
                    <h5>Teknologi Untuk Masa Depan</h5>
                    <p>Rp.200.000</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('assets/images/buku_teknologi_inf.jpg') }}" alt="">
                <div class="captions">
                    <h5>Najelaa Shihab</h5>
                    <h5>Teknologi Untuk Masa Depan</h5>
                    <p>Rp.200.000</p>
                </div>
            </div>
        </div>
    </div><!-- End // .directional_nav -->








    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        feather.replace()
    </script>
    <script src="{{ asset('js/script_welcome.js') }}"></script>
</body>
</html>

