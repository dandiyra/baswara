          <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->
          <div class="content-wrapper">
              <div class="content">

                  <div class="row">
                      <div class="col-12">
                          <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

                          <ul class="nav nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item">
                                  <a class="nav-link active" id="login-tab" data-toggle="tab" href="#ID" role="tab"
                                      aria-controls="home" aria-selected="true">ID</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" id="signup-tab" data-toggle="tab" href="#EN" role="tab"
                                      aria-controls="profile" aria-selected="false">EN</a>
                              </li>
                          </ul>

                          <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active" id="ID" role="tabpanel"
                                  aria-labelledby="login-tab">
                                  <!-- Recent Order Table -->
                                  <div class="card card-table-border-none recent-orders" id="recent-orders">
                                      <div class="card-header justify-content-between">
                                          <h2>Data Produk</h2>
                                          <div class="btn-tambah">
                                              <a class="btn btn-primary" href="<?= base_url('Produk/Tproduk') ?>"><span
                                                      class="mdi mdi-archive"></span> Tambah Produk</a>
                                          </div>
                                      </div>
                                      <div class="card-body pt-0 pb-5">
                                          <table class="table card-table table-responsive table-responsive-large"
                                              style="width:100%">
                                              <thead>
                                                  <tr>
                                                      <th>Gambar Produk</th>
                                                      <th>Nama Produk</th>
                                                      <th>Kategori Produk</th>
                                                      <th>Tanggal Upload</th>
                                                      <th></th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php foreach ($id as $row) : ?>
                                                  <tr>
                                                      <td><img class="mb-3"
                                                              src="<?= base_url('assets1/img-produk/') ?><?= $row['gambar']; ?>"
                                                              width="150" height="100" alt=""></td>
                                                      <td class="text-dark">
                                                          <?= $row['produk'] ?>
                                                      </td>
                                                      <td class="d-none d-lg-table-cell"><?= $row['kategori'] ?></td>
                                                      <td><?= $row['tanggal'] ?></td>
                                                      <td class="text-right">
                                                          <div class="dropdown show d-inline-block widget-dropdown">
                                                              <a class="dropdown-toggle icon-burger-mini" href=""
                                                                  role="button" id="dropdown-recent-order1"
                                                                  data-toggle="dropdown" aria-haspopup="true"
                                                                  aria-expanded="false" data-display="static"></a>
                                                              <ul class="dropdown-menu dropdown-menu-right"
                                                                  aria-labelledby="dropdown-recent-order1">
                                                                  <li class="dropdown-item">
                                                                      <a
                                                                          href="<?= base_url('Produk/Eproduk/') ?><?= $row['idProduk'] ?>">Edit</a>
                                                                  </li>
                                                                  <li class="dropdown-item">
                                                                      <a
                                                                          href="<?= base_url('Produk/Dproduk/') ?><?= $row['Fuuid'] ?>">Remove</a>
                                                                  </li>
                                                              </ul>
                                                          </div>
                                                      </td>
                                                  </tr>
                                                  <?php endforeach; ?>
                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="EN" role="tabpanel" aria-labelledby="signup-tab">
                                  <!-- Recent Order Table -->
                                  <div class="card card-table-border-none recent-orders" id="recent-orders">
                                      <div class="card-header justify-content-between">
                                          <h2>Data Produk</h2>
                                          <div class="btn-tambah">
                                              <a class="btn btn-primary" href="<?= base_url('Produk/Tproduk') ?>"><span
                                                      class="mdi mdi-archive"></span> Add Product Data</a>
                                          </div>
                                      </div>
                                      <div class="card-body pt-0 pb-5">
                                          <table class="table card-table table-responsive table-responsive-large"
                                              style="width:100%">
                                              <thead>
                                                  <tr>
                                                      <th>Product Picture</th>
                                                      <th>Product Name</th>
                                                      <th>Product Category</th>
                                                      <th>Upload Date</th>
                                                      <th></th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php foreach ($en as $row) : ?>
                                                  <tr>
                                                      <td><img class="mb-3"
                                                              src="<?= base_url('assets1/img-produk/') ?><?= $row['gambar']; ?>"
                                                              width="150" height="100" alt=""></td>
                                                      <td class="text-dark">
                                                          <?= $row['produk'] ?>
                                                      </td>
                                                      <td class="d-none d-lg-table-cell"><?= $row['kategori'] ?></td>
                                                      <td><?= $row['tanggal'] ?></td>
                                                      <td class="text-right">
                                                          <div class="dropdown show d-inline-block widget-dropdown">
                                                              <a class="dropdown-toggle icon-burger-mini" href=""
                                                                  role="button" id="dropdown-recent-order1"
                                                                  data-toggle="dropdown" aria-haspopup="true"
                                                                  aria-expanded="false" data-display="static"></a>
                                                              <ul class="dropdown-menu dropdown-menu-right"
                                                                  aria-labelledby="dropdown-recent-order1">
                                                                  <li class="dropdown-item">
                                                                      <a
                                                                          href="<?= base_url('Produk/Eproduk/') ?><?= $row['idProduk'] ?>">Edit</a>
                                                                  </li>
                                                                  <li class="dropdown-item">
                                                                      <a
                                                                          href="<?= base_url('Produk/Dproduk/') ?><?= $row['Fuuid'] ?>">Remove</a>
                                                                  </li>
                                                              </ul>
                                                          </div>
                                                      </td>
                                                  </tr>
                                                  <?php endforeach; ?>
                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div> <!-- End Content -->
                      </div> <!-- End Content Wrapper -->

                      <!-- Modal Logout -->
                      <div class="modal fade" id="logout" tabindex="-1" role="dialog"
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
                                      <p>Apakah anda yakin ingin keluar?</p>
                                  </div>

                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-danger btn-pill"
                                          data-dismiss="modal">No</button>
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
          </body>

          </html>