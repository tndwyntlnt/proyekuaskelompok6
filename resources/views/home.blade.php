<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
     <link rel="shortcut icon" href="{{ asset('assets/icons/dapute.png') }}" type="image/x-icon">

     <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">

    <!-- remix icon -->
     <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"/>

    <!-- scroll animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>katalog Dapute</title>
</head>
<body id="home"> 
    <!-- Navbar -->
    <div class="navbar">
        <div class="container">
            <div class="navbar-box">
                <div class="logo">
                    <x-dashboard-logo class="block h-9 w-auto fill-current text-gray-800" />
                </div>
                <ul class="menu">
                    <li>
                        <a href="#home">Home</a>
                    </li>
                    <li>
                        <a href="#service">Service</a>
                    </li>
                    <li>
                        <a href="#katalog">Katalog</a>
                    </li>
                    <li>
                        <a href="#kontak">Kontak</a>
                    </li>
                    <li>
                        <a href="{{ route('profile.edit') }}">{{ Auth::user()->name }}</a>
                    </li>
                </ul>

                <!-- hamburger -->
                <i class="ri-menu-line ri-2x"></i>
            </div>
        </div>
    </div>
    <!-- Navbar -->

    <!-- Hero -->
    <div class="hero">
        <div class="container">
            <div class="hero-box">
                <div class="box" data-aos="fade-up" data-aos-duraton="1000">
                    <h1>Katalog <br /> 
                    Kue Dapute
                    </h1>
                    @if ($about)
                        <p>{{ $about->about }}</p>
                    @else
                        <p>Informasi belum tersedia.</p>
                    @endif
                    <a href="#katalog">Detail Produk Kami</a>
                </div>
                <div class="box" data-aos="fade-down" data-aos-duraton="1000">
                    <img src="{{ asset('storage/01JWB9X28CWHYYG74HWT8RYVMF.jpg') }}" alt="Hampers" width="700" height="500"> 
                </div>
            </div>
        </div>
    </div>
    <!-- Hero -->


    <!-- Layanan -->
    <div class="layanan" id="service">
        <div class="container">
            <div class="layanan-box">
                <div class="box" data-aos="fade-up" data-aos-duraton="1000">
                    <i class="ri-star-fill ri-2x"></i>
                    <h2>Produk Berkualitas</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident odio voluptas ipsa maiores ut sequi.</p>
                </div>
                <div class="box" data-aos="fade-up" data-aos-duraton="1000" data-aos-delay="200">
                    <i class="ri-price-tag-fill ri-2x"></i>
                    <h2>Harga Terjangkau</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident odio voluptas ipsa maiores ut sequi.</p>
                </div>
                <div class="box" data-aos="fade-up" data-aos-duraton="1000" data-aos-delay="400">
                    <i class="ri-cake-2-line ri-2x"></i>
                    <h2>Pilihan Beragam</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident odio voluptas ipsa maiores ut sequi.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Layanan -->

    <!-- Produk -->
    <div class="produk" id="katalog">
        <div class="container">
            <div class="produk-box">
                <h1 data-aos="fade-up" data-aos-duraton="1000">Produk Kami</h1>
                <ul data-aos="fade-up" data-aos-duraton="1000" data-aos-delay="300">
                    <li>Semua Produk</li>
                    <li>Kue Kacang</li>
                    <li>Putri Salju</li>
                    <li>Nastar</li>
                    <li>Kastengel</li>
                    <li>Kue Sagu Keju</li>
                    <li>Hampers</li>
                </ul>

                <div class="produk-list">
                    <img src="{{ asset('storage/01JWB9SAZQ6VFKDG6WWXCFTCMB.jpg') }}" alt="Produk 2" data-filter="hampers" />
                    <img src="{{ asset('storage/01JWB9TDTF3WSDFBWY49MGH25N.jpg') }}" alt="Produk 3" data-filter="cholatta stick" />
                    <img src="{{ asset('storage/01JWB9W0G4Y6FY6DC80BXS9BJW.jpg') }}" alt="Produk 4" data-filter="kue kacang" />
                    <img src="{{ asset('storage/01JWBA1ZPDYBSD3CE7S5ZZANTR.jpg') }}" alt="Produk 6" data-filter="nastar" />
                    <img src="{{ asset('storage/01JWBA5QFNJJCNJTR4S38S78X5.jpg') }}" alt="Produk 7" data-filter="kue sagu keju" />
                    <img src="{{ asset('storage/01JWBA3619N7ZFZ8RHWHARBDTY.jpg') }}" alt="Produk 8" data-filter="kue sagu keju" />
                    <img src="{{ asset('storage/01JWBA9E1XKNBRYRACHNEFE2PB.jpg') }}" alt="Produk 9" data-filter="putri salju" />
                    <img src="{{ asset('storage/01JWBAATDR9AG9N0Y8YA453ARC.jpg') }}" alt="Produk 10" data-filter="kastengel" />
                    <img src="{{ asset('storage/01JWQ90JBMEX0PJ7VEZ1YWYTH7.jpg') }}" alt="Produk 1" data-filter="hampers" />
                </div>
            </div>
        </div>
    </div>
    <!-- Produk -->

    <!-- Footer -->
    <div class="footer" id="kontak">
        <div class="box">
            <p>&copy; Copyrights 2025 by <span>Kelompok 6 Back End</span>. All Rights Reserved.</p>
        </div>
        <div class="box">
            <a href="https://wa.me/6287794621117"><i class="ri-whatsapp-fill ri-2x"></i></a>
            <a href="https://www.instagram.com/dapute.id?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="ri-instagram-fill ri-2x"></i></a>
        </div>
    </div>
    <!-- Footer -->


    <!-- JS -->
     <script src="{{ asset('dist/js/script.js') }}"></script>

    <!-- scrroll animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>