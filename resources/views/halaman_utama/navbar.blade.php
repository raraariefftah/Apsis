<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Utama</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/style/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('/style/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/style/dist/css/new.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body style="background-color:  rgb(255, 255, 255);">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-white navbar-light  topbar  static-top shadow">
            <h4 href="#" class="mt-2" style="font-family: Arial; font-weight:bold"><img src="/img/logoeria.png" alt=""
                    width="40" height="42" class=" ml-3 mr-2">SMA Swasta Eria Medan</h4>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <form class="form-inline ml-auto">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <li class="ml-2 nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>

                    <!-- Dropdown1-->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-lg-inline text-gray-400 large">Tentang</span>
                        </a>
                        <!-- Isi Dropdown 1 -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="">
                                <i class=" mr-2 text-gray-400"></i>
                                Profil
                            </a>
                            <a class="dropdown-item" href="">
                                <i class=" mr-2 text-gray-400"></i>
                                Visi & Misi
                            </a>
                        </div>
                    </li>
                    <!-- /.Dropdown-->

                    <!-- Dropdown2-->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-lg-inline text-gray-400 large">Informasi</span>
                        </a>
                        <!-- Isi Dropdown 2 -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="">
                                <i class=" mr-2 text-gray-400"></i>
                                Pendaftaran
                            </a>
                        </div>
                    </li>
                    <!-- /.Dropdown-->

                    <li class="nav-item">
                        <a class="nav-link mr-3" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
            <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
                <li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
                <li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img alt="First slide" class="d-block w-100" src="/img/eria.jpg">
                    <div class="carousel-caption d-none d-lg-block">
                        <h5>Selamat Datang Di</h5>
                        <h5>SMA Swasta Eria Medan</h5>

                    </div>
                </div>
                <div class="carousel-item">
                    <img alt="Second slide" class="d-block w-100" src="/img/eria.jpg">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Slider One Item</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt
                            excepturi quas vero.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img alt="Third slide" class="d-block w-100" src="/img/eria.jpg">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Slider One Item</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt
                            excepturi quas vero.</p>
                    </div>
                </div>
            </div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators"
                role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span
                    class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next"
                href="#carouselExampleIndicators" role="button"><span aria-hidden="true"
                    class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
        </div>


        <!-- about -->
        <section id="tentang" class="tentang mt-4 mb-4">
            <div class="container">
                <div class="row mb-3">
                    <div class="col text-center">
                        <h2>Sambutan Kepala Sekolah</h2>
                    </div>
                </div>
                {{-- 
                <div class="row ">
                    <div class="col-md bg-light">
                        <img src="/img/rara.jpg" alt="" class="w-50" style="right: 50%">
                    </div>
                    <div class="col-md text-justify bg-secondary">
                        sambutan dari kepala SMA Swasta Eria Medan sebagai lembaga pendidikan,
                        SMA Swasta Eria Medan tanggap dengan perkembangan teknologi. Dengan dukungan
                        SDM yang dimiliki sekolah ini siap untuk berkompetisi dengan sekolah lain dalam
                        pelayanan
                        informasi publik. Teknologi Informasi Web khususnya, menjadi sarana bagi SMA Swasta Eria
                        Medan untuk
                        memberi pelayanan informasi secara cepat, jelas, dan akuntable. Dari layanan ini pula,
                        sekolah siap menerima saran dari semua pihak yang akhirnya dapat menjawab kebutuhan
                        masyarakat.
                    </div>

                </div> --}}
                <div class="container bg-light">
                    <div class="media" style="width: 700px;">
                        <img src="/img/rara.jpg" class="mr-3" alt="..."
                            style="width: 20%; display: block; margin-left: auto; margin-right: auto; ">
                        <div class="media-body">
                            <h5 class="mt-0">Drs. Khoiruddin Hasibuan M.Pd</h5>
                            <p class="text-justify">Sambutan dari kepala SMA Swasta Eria Medan sebagai lembaga
                                pendidikan,
                                SMA Swasta Eria Medan tanggap dengan perkembangan teknologi. Dengan dukungan
                                SDM yang dimiliki sekolah ini siap untuk berkompetisi dengan sekolah lain dalam
                                pelayanan
                                informasi publik. Teknologi Informasi Web khususnya, menjadi sarana bagi SMA Swasta Eria
                                Medan untuk
                                memberi pelayanan informasi secara cepat, jelas, dan akuntable. Dari layanan ini pula,
                                sekolah siap menerima saran dari semua pihak yang akhirnya dapat menjawab kebutuhan
                                masyarakat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lulusan -->
        <section id="Lulus" class="Lulus bg-light pb-4">
            <div class="container">
                <div class="row mb-4 pt-4">
                    <div class="col text-center">
                        <h2>Siswa-Siswi SMA ERIA Lulus PTN Jalur SNMPTN</h2>
                    </div>
                </div>

                <div class="row mb-3">
                    <button type="button" class="btn btn-secondary ml-auto ">Lihat Selengkapnya</button>
                </div>

                <div class="row text-center">
                    <div class="col-md">
                        <div class="card" ">
                            <img src=" img/rara.jpg" class="card-img-top pt-4" alt="gambar"
                            style="width: 50%; display: block; margin-left: auto; margin-right: auto; ">
                            <div class="card-body">
                                <h5 style="font-weight: bold">Rara Ariefftah</h5>
                                <p>JURUSAN</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card" ">
                            <img src=" img/rara.jpg" class="card-img-top pt-4" alt="gambar"
                            style="width: 50%; display: block; margin-left: auto; margin-right: auto;">
                            <div class="card-body">
                                <h5 style="font-weight: bold">Rara Ariefftah</h5>
                                <p>JURUSAN</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card" ">
                            <img src=" img/rara.jpg" class="card-img-top pt-4" alt="gambar"
                            style="width: 50%; display: block; margin-left: auto; margin-right: auto; ">
                            <div class="card-body">
                                <h5 style="font-weight: bold">Rara Ariefftah</h5>
                                <p>JURUSAN</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card" ">
                            <img src=" img/rara.jpg" class="card-img-top pt-4" alt="gambar"
                            style="width: 50%; display: block; margin-left: auto; margin-right: auto;">
                            <div class="card-body">
                                <h5 style="font-weight: bold">Rara Ariefftah</h5>
                                <p>JURUSAN</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lulusan -->
        <section id="Lulus" class="Lulus  pb-4">
            <div class="container">
                <div class="row mb-4 pt-4">
                    <div class="col text-center">
                        <h2>Siswa-Siswi SMA ERIA Lulus PTN Jalur SNMPTN</h2>
                        <h2>Tahun Akademik 2020/2021</h2>
                    </div>
                </div>

                <div class="row mb-3">
                    <button type="button" class="btn btn-secondary ml-auto ">Lihat Selengkapnya</button>
                </div>

                <div class="row text-center">
                    <div class="col-md">
                        <div class="card" ">
                            <img src=" img/raraa.jpg" class="card-img-top pt-4" alt="gambar"
                            style="width: 50%; display: block; margin-left: auto; margin-right: auto; ">
                            <div class="card-body">
                                <h5 style="font-weight: bold">Rara Ariefftah</h5>
                                <p>JURUSAN</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card" ">
                            <img src=" img/raraa.jpg" class="card-img-top pt-4" alt="gambar"
                            style="width: 50%; display: block; margin-left: auto; margin-right: auto;">
                            <div class="card-body">
                                <h5 style="font-weight: bold">Rara Ariefftah</h5>
                                <p>JURUSAN</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card" ">
                            <img src=" img/raraa.jpg" class="card-img-top pt-4" alt="gambar"
                            style="width: 50%; display: block; margin-left: auto; margin-right: auto; ">
                            <div class="card-body">
                                <h5 style="font-weight: bold">Rara Ariefftah</h5>
                                <p>JURUSAN</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card" ">
                            <img src=" img/raraa.jpg" class="card-img-top pt-4" alt="gambar"
                            style="width: 50%; display: block; margin-left: auto; margin-right: auto;">
                            <div class="card-body">
                                <h5 style="font-weight: bold">Rara Ariefftah</h5>
                                <p>JURUSAN</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <footer class="text-black pt-3 pb-3" style="background-color: rgb(36, 88, 62);">
            <div class="container">
                <div class="row ">
                    <div class="col" style="color:rgb(255, 255, 255)">
                        <h3>Kontak</h3>
                        <h5>SMA Swasta Eria Medan</h5>
                        <h5 class="fas fa-map-marker-alt pt-2"> Jl. Sisingamangaraja No. 195 Medan, Kota Medan, Sumatera
                            Utara ,20217</h5><br>
                        <h5 class="fas fa-phone pt-2"> (061) 7866341</h5><br>
                        <h5 class="fas fa-envelope pt-2"> smaswastaeria@gmail.com</h5>
                    </div>
                </div>
            </div>
        </footer>


        <!-- ./wrapper -->
        <!-- jQuery -->
        <script src="{{ asset('/style/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('/style/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('/style/dist/js/adminlte.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('/style/dist/js/demo.js') }}"></script>
</body>

</html>
