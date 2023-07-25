<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="<?= base_url('admin/dashborad'); ?>">
            <img src="<?= base_url(); ?>/assets/images/logo2.png" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="<?= base_url(); ?>/admin/dashborad">
            <img src="<?= base_url(); ?>/assets/images/logo2.png" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
         <!--  <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li>
          </ul> -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="<?= base_url(); ?>/assets/admin/images/faces/face8.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="<?= base_url(); ?>/assets/admin/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold"><?=empty(session('username'))?'':session('username');?></p>
                  <p class="font-weight-light text-muted mb-0"><?=empty(session('email'))?'':session('email');?></p>
                </div>
                <a href="<?php echo base_url('admin/setting'); ?>" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary"></i> Setting</a>
                <a href="<?php echo base_url('Admin/logout'); ?>" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>