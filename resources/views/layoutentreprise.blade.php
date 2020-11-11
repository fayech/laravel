
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Start & Go | Espace entreprise</title>
  <link rel="icon" href="{{URL::to('login-admin/img/icon.ico')}}" />

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('login-front-office/plugins/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('login-front-office/dist/css/adminlte.min.css')}}">
  <!-- iCheck -->
  <!-- Morris chart -->
  <!-- jvectormap -->
  <!-- Date Picker -->
  <!-- Daterange picker -->
  <!-- bootstrap wysihtml5 - text editor -->
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{URL::to('/Start&Go')}}" class="nav-link">Acceuil</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{URL::to('/index')}}" class="nav-link">Shop</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
    
      <!-- Notifications Dropdown Menu -->
     
   
       <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
         <i class="fa fa-address-card-o" aria-hidden="true"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">                    {{ Session::get('name') }}
</span>
          <div class="dropdown-divider"></div>
       
          
         
          <a href="{{URL::to('/profil')}}" class="dropdown-item">
          <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                   Mon compte
                <div class="dropdown-divider"></div>
       
          
         
          <a href="{{URL::to('/logoutentreprise')}}" class="dropdown-item">
          <i class="fa fa-unlock-alt" aria-hidden="true"></i>


                    Se déconnecter
            
          </a>
          <div class="dropdown-divider"></div>
         
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{URL::to('login-front-office/images/2ndlogoMAJ.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Espace Entreprise</span>
    </a>

    <!-- Sidebar -->
<div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{Storage::url(Session::get('image'))}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{ Session::get('name') }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
  
         
         
         
         
        
         
           
            
           
           


          <li class="nav-header">Responsable Entreprise</li>
            <li class="nav-item">
            <a href="{{URL::to('/chartEntreprise')}}" class="nav-link">
           <i class="fa fa-line-chart" aria-hidden="true"></i>



              <p>Gestion entreprise</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/adminentreprise')}}" class="nav-link">
            <i class="fa fa-users" aria-hidden="true"></i>


              <p>Gestion  employés</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/affichecommande')}}" class="nav-link">
             <i class="fa fa-opencart" aria-hidden="true"></i>


              <p>Gestion commandes</p>
            </a>
          </li>
         <li class="nav-item">
            <a href="{{URL::to('/logoutentreprise')}}" class="nav-link">
             <i class="fa fa-unlock" aria-hidden="true"></i>



              <p>Se déconnecter</p>
            </a>
          </li>
      
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
       @yield('dynamic')

            <!-- TO DO List -->
           
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
         

            
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('login-front-office/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('login-front-office/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Morris.js charts -->
<!-- jQuery -->
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('login-front-office/https://code.jquery.com/ui/1.12.1/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<!-- Morris.js charts -->
<!-- Sparkline -->
<!-- jvectormap -->
<!-- jQuery Knob Chart -->
<!-- daterangepicker -->
<!-- datepicker -->
<!-- Bootstrap WYSIHTML5 -->

<!-- AdminLTE App -->
<script src="{{asset('login-front-office/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<script src="{{asset('login-front-office/dist/js/demo.js')}}"></script>

</body>
</html>
