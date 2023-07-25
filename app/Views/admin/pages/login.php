  <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>APKSure</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/admin/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/admin/css/custom.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/admin/css/shared/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/logo.png" />
  </head>
  <body>
  <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
          
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                <?php if (!empty(session()->getFlashdata('msg'))) : ?>
                <div class="alert alert-danger" role="alert">
                  <?=session()->getFlashdata('msg');?>
                  </div>
              <?php endif;?>
                <form action="<?= base_url(); ?>/admin/userlogin" method="post">
                  <div class="form-group">
                    <label class="label">User Name</label>
                    <div class="input-group">
                      <input type="text" name="lgnname" class="form-control" placeholder="User Name">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                      <input type="password" name="lgnpass"  class="form-control" placeholder="*********">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary submit-btn btn-block">Login</button>
                  </div>
              </div>
              <p class="footer-text text-center mt-4 ">Copyright © 2020 APKSure. All rights reserved.</p>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

      <!-- plugins:js -->
    <script src="<?= base_url(); ?>/assets/admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="<?= base_url(); ?>/assets/admin/js/shared/off-canvas.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/shared/hoverable-collapse.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/shared/misc.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/shared/settings.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/shared/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>