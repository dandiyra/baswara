<!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->
          <div class="content-wrapper">
    <div class="content">

        <div class="bg-white border rounded">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="row no-gutters">
                <div class="col-lg-4 col-xl-3">
                    <div class="profile-content-left profile-left-spacing pt-5 pb-3 px-3 px-xl-5">
                        <div class="card text-center widget-profile px-0 border-0">
                            <div class="card-img mx-auto rounded-circle mt-5">
                                <img style="width: 100%; height: 100%;"
                                    src="<?= base_url('assets1/') ?>img/user/avatar.png" alt="user image">
                            </div>

                            <div class="card-body">
                                <h4 class="py-2 text-dark"><?= $akun['nama'] ?></h4>
                                <p><?= $akun['email'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-xl-9">
                    <div class="profile-content-right profile-right-spacing py-5">
                        <div class="tab-content px-3 px-xl-5" id="myTabContent">

                            <div class="tab-pane-content mt-5">
                                <h1 class="mb-3">Your Profile</h1>
                                <form action="<?= base_url('Account/update') ?>" method="POST">
                                    <div class="row mb-2">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="firstName">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="firstName" name="nama"
                                                    value="<?= $akun['nama'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="<?= $akun['email'] ?>">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="oldPassword">Old password</label>
                                        <input type="password" class="form-control" id="oldPassword" name="old">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="newPassword">New password</label>
                                        <input type="password" class="form-control" id="newPassword" name="new">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="conPassword">Confirm password</label>
                                        <input type="password" class="form-control" id="conPassword" name="confirm">
                                    </div>

                                    <div class="d-flex justify-content-end mt-5">
                                        <button type="submit" class="btn btn-primary mb-2 btn-pill">Update
                                            Profile</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- End Content -->
</div> <!-- End Content Wrapper -->

<!-- Footer -->
<footer class="footer mt-auto">
    <div class="copyright bg-white">
        <p>
            &copy; <span id="copy-year"></span> Copyright Sleek Dashboard Bootstrap Template by <a class="text-primary"
                href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
        </p>
    </div>
    <script>
    var d = new Date();
    var year = d.getFullYear();
    document.getElementById("copy-year").innerHTML = year;
    </script>
</footer>


</div> <!-- End Page Wrapper -->
</div> <!-- End Wrapper -->

<!-- Modal Logout -->
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p>Apakah anda yakin ingin keluar?</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">No</button>
                <a type="submit" href="<?= base_url('Auth/logout') ?>" class="btn btn-primary btn-pill">Yes</a>
            </div>
        </div>
    </div>
</div>

<!-- <script type="module">
      import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

      const el = document.createElement('pwa-update');
      document.body.appendChild(el);
    </script> -->

<!-- Javascript -->
<!-- Javascript -->
<script src="<?= base_url("assets1/") ?>plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url("assets1/") ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url("assets1/") ?>plugins/simplebar/simplebar.min.js"></script>

<script src='<?= base_url("assets1/") ?>plugins/charts/Chart.min.js'></script>
<script src='<?= base_url("assets1/") ?>js/chart.js'></script>

<script src='<?= base_url("assets1/") ?>plugins/jvectormap/jquery-jvectormap-2.0.3.min.js'></script>
<script src='<?= base_url("assets1/") ?>plugins/jvectormap/jquery-jvectormap-world-mill.js'></script>
<script src='<?= base_url("assets1/") ?>js/vector-map.js'></script>

<script src='<?= base_url("assets1/") ?>plugins/daterangepicker/moment.min.js'></script>
<script src='<?= base_url("assets1/") ?>plugins/daterangepicker/daterangepicker.js'></script>
<script src='<?= base_url("assets1/") ?>js/date-range.js'></script>

<script src='<?= base_url("assets1/") ?>plugins/toastr/toastr.min.js'></script>

<link href="<?= base_url("assets1/") ?>options/optionswitch.css" rel="stylesheet">
<script src="<?= base_url("assets1/") ?>options/optionswitcher.js"></script>
<script src="<?= base_url("assets1/") ?>js/sleek.js"></script>