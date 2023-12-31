
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Now UI Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="<?php echo asset('admin/assets/css/bootstrap.min.css')?>" rel="stylesheet" />
  <link href="<?php echo asset('admin/assets/css/now-ui-dashboard.css?v=1.5.0')?>" rel="stylesheet" />
  <link href="<?php echo asset('admin/assets/demo/demo.css')?>" rel="stylesheet" />
</head>

<body class="">

  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          CT
        </a>
        <a href="#" class="simple-text logo-normal">
          ADMIN
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <!-- se llama a la funcion menu para q se active cuadno se elija una opcion -->
        <li class="active">
            <a href="./"> <i class="now-ui-icons design_app"></i> <p>INICIO</p>  </a>
          </li>

          <li >
            <a href="./adminProductos">  <i class="now-ui-icons design_bullet-list-67"></i>  <p>ADMIN PRODUCTO</p>  </a>
          </li>
          <li>
            <a href="./icons.html"> <i class="now-ui-icons education_atom"></i> <p>ICONOS</p> </a>
          </li>
          <li>
            <a href="./map.html">  <i class="now-ui-icons location_map-big"></i> <p>MAPAS</p> </a>
          </li>
          <li>
            <a href="./notifications.html"> <i class="now-ui-icons ui-1_bell-53"></i> <p>NOTIFICACION</p> </a>
          </li>
          <li>
            <a href="./user.html"> <i class="now-ui-icons users_single-02"></i> <p>PERFIL DE USUARIO</p>  </a>
          </li>
          
          

        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">User Profile</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          
        </div>
      </nav>
      <!-- End Navbar -->
       <!-- <div class="panel-header panel-header-lg">
        <canvas id="bigDashboardChart"></canvas>
      </div>  -->
      <div class="panel-header panel-header-sm">
      </div>
      

      <div class="content">
           @yield('contenido')
        
  

      </div>

      <footer class="footer">
        <div class=" container-fluid ">
          
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>


    </div>
  </div>
  <script src="<?php echo asset('admin/assets/js/core/jquery.min.js')?>"></script>
  <script src="<?php echo asset('admin/assets/js/core/popper.min.js')?>"></script>
  <script src="<?php echo asset('admin/assets/js/core/bootstrap.min.js')?>"></script>
  <script src="<?php echo asset('admin/assets/js/plugins/perfect-scrollbar.jquery.min.js')?>"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="<?php echo asset('admin/assets/js/plugins/chartjs.min.js')?>"></script>
  <script src="<?php echo asset('admin/assets/js/plugins/bootstrap-notify.js')?>"></script>
  <script src="<?php echo asset('admin/assets/js/now-ui-dashboard.min.js?v=1.5.0')?>"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo asset('admin/assets/demo/demo.js')?>"></script>
  <script>
    $(document).ready(function() {
      demo.initDashboardPageCharts();
    });
  </script>
</body>

</html>