          <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->
          <div class="content-wrapper">
              <div class="content">

                  <div class="row">
                      <div class="col-12">
                          <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

                          <!-- Recent Order Table -->
                          <div class="card card-table-border-none recent-orders" id="recent-orders">
                              <div class="card-header justify-content-between">
                                  <h2>Data Gambar Halaman Home</h2>
                                  <div class="btn-tambah">
                                      <a class="btn btn-primary" href="#" data-toggle="modal"
                                          data-target="#tambahdata"><span class="mdi mdi-archive"></span> Tambah Gambar
                                          Halaman Home</a>
                                  </div>
                              </div>
                              <div class="card-body pt-0 pb-5">
                                  <table class="table card-table table-responsive table-responsive-large"
                                      style="width:100%">
                                      <thead>
                                          <tr>
                                              <th>Gambar</th>
                                              <th>Nama Gambar</th>
                                              <th>Tanggal Upload</th>
                                              <th></th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <?php foreach ($web as $row) : ?>
                                          <tr>
                                              <td><img class="mb-3"
                                                      src="<?= base_url('assets1/img-produk/') ?><?= $row['gambar']; ?>"
                                                      width="150" height="100" alt=""></td>
                                              <td class="text-dark">
                                                  <?= $row['nGambar'] ?>
                                              </td>
                                              <td><?= date("d M Y", $row['tanggal']) ?></td>
                                              <td class="text-right">
                                                  <div class="dropdown show d-inline-block widget-dropdown">
                                                      <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                                          id="dropdown-recent-order1" data-toggle="dropdown"
                                                          aria-haspopup="true" aria-expanded="false"
                                                          data-display="static"></a>
                                                      <ul class="dropdown-menu dropdown-menu-right"
                                                          aria-labelledby="dropdown-recent-order1">
                                                          <li class="dropdown-item">
                                                              <a href="#" data-target="#edithome<?= $row['idHome'] ?>"
                                                                  data-toggle="modal">Edit</a>
                                                          </li>
                                                          <li class="dropdown-item">
                                                              <a
                                                                  href="<?= base_url('Website/Dhome/') ?><?= $row['idHome'] ?>">Remove</a>
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
                      </div> <!-- End Content -->
                  </div> <!-- End Content Wrapper -->

                  <!-- Modal Tambah Home -->
                  <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Tambah Gambar</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>

                              <div class="modal-body">
                                  <form action="<?= base_url('Website/Thome') ?>" method="POST"
                                      enctype="multipart/form-data">
                                      <div class="form-group">
                                          <label for="Gambar Home">Gambar</label>
                                          <input type="file" class="form-control-file" id="gambar" name="gambar">
                                          <span class="mt-2 d-block"><?= form_error('gambar') ?></span>
                                      </div>

                                      <div class="form-group">
                                          <label for="Nama Gambar">Keterangan Gambar</label>
                                          <input type="text" class="form-control" id="nama" name="nama">
                                          <span class="mt-2 d-block"><?= form_error('nama') ?></span>
                                      </div>

                                      <div class="form-footer pt-4 pt-5 mt-4 border-top">
                                          <button type="submit" class="btn btn-primary btn-default">Submit</button>
                                          <button type="submit" class="btn btn-danger btn-default"
                                              data-dismiss="modal">Cancel</button>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- End Modal Tambah Home -->

                  <!-- Modal Edit Home -->
                  <?php foreach ($web as $data) : ?>
                  <div class="modal fade" id="edithome<?= $data['idHome'] ?>" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Rubah Gambar</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>

                              <div class="modal-body">
                                  <form action="<?= base_url('Website/Ehome') ?>" method="POST"
                                      enctype="multipart/form-data">

                                      <input type="text" id="idhome" name="idhome" value="<?= $data['idHome'] ?>"
                                          hidden>

                                      <div class="form-group">
                                          <label for="Gambar Home">Gambar</label>
                                      </div>

                                      <div class="form-group">
                                          <img class="mb-3"
                                              src="<?= base_url('assets1/img-produk/') ?><?= $data['gambar']; ?>"
                                              width="150" height="100" alt="">
                                          <input type="file" class="form-control-file" id="gambar" name="gambar">
                                      </div>

                                      <div class="form-group">
                                          <label for="Nama Gambar">Keterangan Gambar</label>
                                          <input type="text" class="form-control" id="nama" name="nama"
                                              value="<?= $data['nGambar'] ?>">
                                      </div>

                                      <div class="form-footer pt-4 pt-5 mt-4 border-top">
                                          <button type="submit" class="btn btn-primary btn-default">Submit</button>
                                          <button type="submit" class="btn btn-danger btn-default"
                                              data-dismiss="modal">Cancel</button>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <?php endforeach; ?>
              <!-- End Modal Edit Home -->

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