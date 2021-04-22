<!DOCTYPE html>
<html>

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
      <meta name="author" content="Creative Tim">
      <title>LOGIN</title>
      <link rel="icon" href="{{ asset('admin/assets/img/brand/favicon.png') }}" type="image/png">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
      <link rel="stylesheet" href="{{ asset('admin/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('admin/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('admin/assets/css/argon.css?v=1.2.0') }}" type="text/css">
</head>

<body class="bg-default">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="dashboard.html">
                <img src="../assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Sign Up</small>
              </div>
              <form role="form" action="{{ route('postlogin') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" name="email" type="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" name="password" type="password">
                  </div>
                </div>
                <div class="text-muted font-italic"><small>Buat Akun Baru: <span class="text-success font-weight-700"><a href="{{ route('register') }}">Register</a></span></small></div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Sign in</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small></small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Argon Scripts -->
      <script src="{{asset('admin/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
      <script src="{{asset('admin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{asset('admin/assets/vendor/js-cookie/js.cookie.js') }}"></script>
      <script src="{{asset('admin/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
      <script src="{{asset('admin/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
      <script src="{{asset('admin/assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
      <script src="{{asset('admin/assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
      <script src="{{asset('admin/assets/js/argon.js?v=1.2.0') }}"></script>
      <!-- JAVA SCRIPT ONLY -->
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
      <!-- END JAVA SCRIPT -->
</body>

</html>