<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PPDB SMK Semangat 45</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<body>
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ route('beranda2') }}"><h2>PPDB SMK SEMANGAT 45</h2></a>    
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('create') }}">REGISTRASI SEKARANG</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section>
            <div class="container">
                  <div class="row">
                        <div class="col-md-12">
                              <div class="main-card mb-3 card card-body">
                                    <h3>Registrasi</h3>
                                    <div class="table-responsive">
                                          <form action="{{ route('store') }}" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                      <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                  <label for="no_daftar" class="form-label">No Daftar</label>
                                                                  <input type="text" class="form-control"  name="no_daftar" value="{{ $no_daftar }}" id="no_reg" readonly>
                                                            </div>
                                                      </div>
                                                      <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                  <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                                                  <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" required>
                                                            </div>
                                                      </div>
                                                      <div class="form-group">
                                                            <label for="jk">Jenis Kelamin</label>
                                                            <select name="jk" id="jk" class="form-select" required>
                                                                  <option selected>Pilih</option>
                                                                  <option value="Laki-laki">Laki-laki</option>
                                                                  <option value="Perempuan">perempuan</option>
                                                            </select>
                                                      </div>
                                                      <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                  <label for="alamat_lengkap" class="form-label">Alamat Lengkap</label>
                                                                  <textarea name="alamat_lengkap" class="form-control" cols="15" rows="5"></textarea>
                                                            </div>
                                                      </div>
                                                      <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                  <label for="agama" class="form-label">Agama</label>
                                                                  <select name="agama" id="agama" class="form-select" required>
                                                                        <option selected>Pilih</option>
                                                                        <option value="Islam">Islam</option>
                                                                        <option value="Katolik">Katolik</option>
                                                                        <option value="Protestan">Protestan</option>
                                                                        <option value="Hindu">Hindu</option>
                                                                        <option value="Buddha">Buddha</option>
                                                                        <option value="Khonghucu">Khonghucu</option>
                                                                  </select>
                                                            </div>
                                                      </div>
                                                      <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                  <label for="asal_smp" class="form-label">Asal SMP</label>
                                                                  <input type="text" class="form-control" name="asal_smp" id="asal_smp" required>
                                                            </div>
                                                      </div>
                                                      <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                  <label for="jurusan" class="form-label">Jurusan</label>
                                                                  <select name="jurusan" id="jurusan" class="form-select" required>
                                                                        <option selected>Pilih</option>
                                                                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                                                        <option value="Tata Boga">Tata Boga</option>
                                                                        <option value="Tata Busana">Tata Busana</option>
                                                                        <option value="Multimedia">Multimedia</option>
                                                                  </select>
                                                            </div>
                                                      </div>
                                                </div>
                                                <br>
                                                <div class="modal-footer">
                                                      <br>
                                                      <br>
                                                      <button type="submit" class="btn btn-primary">Registrasi</button>
                                                </div>
                                          </form>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
    </section>
</body>

</html>