          <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->
          <div class="content-wrapper">
              <div class="content">
                  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

                  <div class="row">
                      <div class="col-12">

                          <!-- Recent Order Table -->
                          <div class="card card-table-border-none recent-orders" id="recent-orders">
                              <div class="card-header justify-content-between">
                                  <h2>Data Access User</h2>
                                  <!-- <div class="btn-tambah">
                                      <a class="btn btn-primary" href="<?= base_url('Produk/Tproduk') ?>"><span
                                              class="mdi mdi-archive"></span> Data Access User</a>
                                  </div> -->
                              </div>
                              <div class="card-body pt-0 pb-5">
                                  <table class="table card-table table-responsive table-responsive-large"
                                      style="width:100%">
                                      <thead>
                                          <tr>
                                              <th>Nama User</th>
                                              <th>Role User</th>
                                              <th>Access</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <?php foreach ($user as $row) : ?>
                                          <tr>
                                              <td><?= $row['nama'] ?></td>
                                              <td class="text-dark">
                                                  <?php if ($row['roleId'] == 0) { ?>
                                                  Admin Utama
                                                  <?php } else if ($row['roleId'] == 1) { ?>
                                                  Admin Support
                                                  <?php } else if ($row['roleId'] == 2) { ?>
                                                  HR
                                                  <?php } ?>
                                              </td>
                                              <td>
                                                  <a class="btn btn-warning btn-pill" data-toggle="modal"
                                                      data-target="#access<?= $row['idUser'] ?>">Change
                                                      Access</a>
                                              </td>
                                          </tr>
                                          <?php endforeach ; ?>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div> <!-- End Content -->
                  </div> <!-- End Content Wrapper -->

                  <!-- Modal Edit Access -->
                  <?php foreach ($user as $row) : ?>
                  <div class="modal fade" id="access<?= $row['idUser'] ?>" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>

                              <div class="modal-body">
                                  <?php var_dump($row['roleId']) ?>
                                  <table class="table card-table table-responsive table-responsive-large"
                                      style="width:100%">
                                      <thead>
                                          <tr>
                                              <th>Menu</th>
                                              <th>Access</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <?php foreach ($menu as $m) : ?>
                                          <tr>
                                              <td><?= $m['title'] ?></td>
                                              <td>
                                                  <input class="form-check-input" type="checkbox"
                                                      <?= check_access($row['idUser'], $m['idMenu']); ?>
                                                      data-role="<?= $row['idUser']; ?>"
                                                      data-menu="<?= $m['idMenu']; ?>">
                                              </td>
                                          </tr>
                                          <?php endforeach ; ?>
                                      </tbody>
                                  </table>
                              </div>

                              <div class="modal-footer">
                                  <button type="button" class="btn btn-danger btn-pill"
                                      data-dismiss="modal">Close</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  <?php endforeach ; ?>
                  <!-- End Modal Edit Access -->

                  <!-- Modal Logout -->
                  <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                      aria-hidden="true">
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
                                  <a type="submit" href="<?= base_url('Auth/logout') ?>"
                                      class="btn btn-primary btn-pill">Yes</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- End Modal Logout -->

                  <!-- Footer -->
                  <footer class="footer mt-auto">
                      <div class="copyright bg-white">
                          <p>
                              &copy; <span id="copy-year"></span> Copyright Design By <a class="text-primary"
                                  href="spectrumcn.com" target="_blank">Spectrum</a>.
                          </p>
                      </div>
                      <script>
                      var d = new Date();
                      var year = d.getFullYear();
                      document.getElementById("copy-year").innerHTML = year;
                      </script>
                  </footer>

              </div>
          </div>

          </div> <!-- End Page Wrapper -->
          </div> <!-- End Wrapper -->


          <!-- <script type="module">
      import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

      const el = document.createElement('pwa-update');
      document.body.appendChild(el);
    </script> -->

          <!-- Javascript -->
          <script src="<?=base_url("assets1/")?>plugins/jquery/jquery.min.js"></script>
          <script src="<?=base_url("assets1/")?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="<?=base_url("assets1/")?>plugins/simplebar/simplebar.min.js"></script>

          <script src='<?=base_url("assets1/")?>plugins/charts/Chart.min.js'></script>
          <script src='<?=base_url("assets1/")?>js/chart.js'></script>




          <script src='<?=base_url("assets1/")?>plugins/jvectormap/jquery-jvectormap-2.0.3.min.js'></script>
          <script src='<?=base_url("assets1/")?>plugins/jvectormap/jquery-jvectormap-world-mill.js'></script>
          <script src='<?=base_url("assets1/")?>js/vector-map.js'></script>

          <script src='<?=base_url("assets1/")?>plugins/daterangepicker/moment.min.js'></script>
          <script src='<?=base_url("assets1/")?>plugins/daterangepicker/daterangepicker.js'></script>
          <script src='<?=base_url("assets1/")?>js/date-range.js'></script>


          <script src='<?=base_url("assets1/")?>plugins/toastr/toastr.min.js'></script>


          <link href="<?=base_url("assets1/")?>options/optionswitch.css" rel="stylesheet">
          <script src="<?=base_url("assets1/")?>options/optionswitcher.js"></script>
          <script src="<?=base_url("assets1/")?>js/sleek.js"></script>

          <script>
$('.form-check-input').on('click', function() {
    const menuId = $(this).data('menu');
    const roleId = $(this).data('role');

    $.ajax({
        url: "<?= base_url('Access/changeaccess'); ?>",
        type: 'post',
        data: {
            menuId: menuId,
            roleId: roleId
        },
        success: function() {
            document.location.href = "<?= base_url('Access/'); ?>";
        }
    });

});
          </script>
          </body>

          </html>