<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
     <div class="wrapper">

          <!-- Preloader -->
          <div class="preloader flex-column justify-content-center align-items-center">
               <img class="animation__wobble" src="<?= base_url('assets/'); ?>dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
          </div>

          <!-- Navbar -->
          <nav class="main-header navbar navbar-expand navbar-light">
               <!-- Left navbar links -->
               <ul class="navbar-nav">
                    <li class="nav-item">
                         <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                         <a href="<?= base_url('dashboard'); ?>" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                         <a href="<?= base_url('tiket'); ?>" class="nav-link">Tiket</a>
                    </li>
               </ul>

               <!-- Right navbar links -->
               <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                         <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                              <i class="fas fa-expand-arrows-alt"></i>
                         </a>
                    </li>

               </ul>
          </nav>
          <!-- /.navbar -->