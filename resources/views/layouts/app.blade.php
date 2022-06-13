<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg warnabg">
        <div class="container">
          <a class="navbar-brand" href="/">Simple Siakad</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active cl" aria-current="page" href="/datamahasiswa">Data Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link cl" href="/tambahmahasiswa">Input Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link cl" href="/about-me">About Me</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>

      <!-- content -->
      @yield('content')


      <footer class="warnabg text-center text-lg-start text-black">
        <!-- Grid container -->
        <div class="container p-2">
          <!--Grid row-->
          <div class="row my-4">
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
    
                <img src="/img/utm.jpeg" height="80" alt=""
                     loading="lazy" />
    
              <h6>Jurusan Teknik Informatika</h6>
              <h6>Universitas Trunojoyo Madura</h6>
              <span>Jl. Raya Telang, Kecamatan Kamal, Bangkalan</span>
              <span>69162 Indonesia</span>
              <span>Kampus Universitas Trunojoyo Madura</span>
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase mb-4">Contact</h5>
    
              <ul class="list-unstyled">
                <li class="mb-2">
                  <p class="text-black">Telp : 031-3011146</p>
                </li>
                <li class="mb-2">
                  <p class="text-black">Fax : 031-3011506</p>
                </li>
                <li class="mb-2">
                  <p class="text-black">email : if.ft@trunojoyo.ac.id</p>
                </li>
              </ul>
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase mb-4">Layanan</h5>
    
              <ul class="list-unstyled">
                <li class="mb-2">
                  <p class="text-black">Pembayaran UKT</p>
                </li>
                <li class="mb-2">
                  <p class="text-black">Pendaftaran KP</p>
                </li>
                <li class="mb-2">
                  <p class="text-black">Pendaftaran Wisuda</p>
                </li>
                <li class="mb-2">
                  <p class="text-black">Administrasi</p>
                </li>
              </ul>
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase mb-4">Resource</h5>
    
              <ul class="list-unstyled">
                <li>
                  <p class="text-black">e-Journal</p>
                </li>
                <li>
                  <p class="text-black">Portal Tugas Akhir</p>
                </li>
                <li>
                  <p class="text-black">Website Resmi Kampus</p>
                </li>
                <li>
                    <p class="text-black">Download Administrasi</p>
                </li>
              </ul>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Grid container -->
      </footer>
</body>
</html>