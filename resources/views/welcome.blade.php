<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>@yield('title')</title>
  <link href="{{url('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('css/ruang-admin.min.css')}}" rel="stylesheet">
  <link href="{{url('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <link href="{{url('vendor/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
        
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
         
         
           
          
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
    
        <div class="jumbotron">
            <h1 class="display-4">Selamat Datang Di Integrasi Posyandu</h1>
            <h4 class="display-4">Dinas Kesehatan Kabupaten Indramayu</h4>
            <p class="lead">Untuk Masuk Ke dalam Sistem silakan Login Terlebih Dahulu</p>
            <hr class="my-4">
            
            <a class="btn btn-primary btn-icon-split  btn-lg" href="{{url('/login/admin')}}" role="button">
            <span class="icon text-white-50">
                <i class="fas fa-user-cog fa-2x" aria-hidden="true"></i>
              </span>
              <span class="text">Login Sebagai Admin</span>  
            </a>
           
            <a class="btn btn-info btn-icon-split  btn-lg float-right" href="{{url('/login/bidan')}}" role="button">
            <span class="icon text-white-50">
                <i class="fa fa-user-md fa-2x" aria-hidden="true"></i>
              </span>
              <span class="text">Login Sebagai Bidan</span>  
            </a>
          </div>
          
        </div>
        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> Integrasi Posyandu
          
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>
 
<script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{url('js/ruang-admin.min.js')}}"></script>

</body>
</html>
