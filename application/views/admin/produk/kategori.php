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
                                          <h2>Data Kategori Produk</h2>
                                          <div class="btn-tambah">
                                              <a class="btn btn-primary" href="#" data-toggle="modal"
                                                  data-target="#tambahdataID"><span class="mdi mdi-tag"></span> Tambah
                                                  Kategori
                                                  Produk (ID)</a>
                                          </div>
                                      </div>


                                      <div class="card-body pt-0 pb-5">
                                          <table class="table card-table table-responsive table-responsive-large"
                                              style="width:100%">
                                              <thead>
                                                  <tr>
                                                      <th>Gambar Kategori</th>
                                                      <th>Judul Kategori</th>
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
                                                          <?= $row['nKategori'] ?>
                                                      </td>
                                                      <td class="d-none d-lg-table-cell"><?= $row['tanggal'] ?></td>
                                                      <td class="text-right">
                                                          <div class="dropdown show d-inline-block widget-dropdown">
                                                              <a class="dropdown-toggle icon-burger-mini" href=""
                                                                  role="button" id="dropdown-recent-order1"
                                                                  data-toggle="dropdown" aria-haspopup="true"
                                                                  aria-expanded="false" data-display="static"></a>
                                                              <ul class="dropdown-menu dropdown-menu-right"
                                                                  aria-labelledby="dropdown-recent-order1">
                                                                  <li class="dropdown-item">
                                                                      <a href="#"
                                                                          data-target="#editkat<?= $row['idKat'] ?>"
                                                                          data-toggle="modal">Edit</a>
                                                                  </li>
                                                                  <li class="dropdown-item">
                                                                      <a
                                                                          href="<?= base_url('Kategori/Dkat/') ?><?= $row['idKat'] ?>">Remove</a>
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
                                  <div class="card card-table-border-none recent-orders" id="recent-orders">
                                      <div class="card-header justify-content-between">
                                          <h2>Data Kategori Produk</h2>
                                          <div class="btn-tambah">
                                              <a class="btn btn-primary" href="#" data-toggle="modal"
                                                  data-target="#tambahdataEN"><span class="mdi mdi-tag"></span> Add
                                                  Product Category (EN)</a>
                                          </div>
                                      </div>


                                      <div class="card-body pt-0 pb-5">
                                          <table class="table card-table table-responsive table-responsive-large"
                                              style="width:100%">
                                              <thead>
                                                  <tr>
                                                      <th>Category Picture</th>
                                                      <th>Category Name</th>
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
                                                          <?= $row['nKategori'] ?>
                                                      </td>
                                                      <td class="d-none d-lg-table-cell"><?= $row['tanggal'] ?></td>
                                                      <td class="text-right">
                                                          <div class="dropdown show d-inline-block widget-dropdown">
                                                              <a class="dropdown-toggle icon-burger-mini" href=""
                                                                  role="button" id="dropdown-recent-order1"
                                                                  data-toggle="dropdown" aria-haspopup="true"
                                                                  aria-expanded="false" data-display="static"></a>
                                                              <ul class="dropdown-menu dropdown-menu-right"
                                                                  aria-labelledby="dropdown-recent-order1">
                                                                  <li class="dropdown-item">
                                                                      <a href="#"
                                                                          data-target="#editkat<?= $row['idKat'] ?>"
                                                                          data-toggle="modal">Edit</a>
                                                                  </li>
                                                                  <li class="dropdown-item">
                                                                      <a
                                                                          href="<?= base_url('Kategori/Dkat/') ?><?= $row['idKat'] ?>">Remove</a>
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
                          </div>

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

          <!-- Modal Tambah Home -->
          <div class="modal fade" id="tambahdataID" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kategori</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>

                      <div class="modal-body">
                          <form action="<?= base_url('Kategori/Tkat') ?>" method="POST" enctype="multipart/form-data">
                              <input type="text" id="bhs" name="bhs" value="id" hidden>
                              <div class="form-group">
                                  <label for="Gambar Home">Gambar</label>
                                  <input type="file" class="form-control-file" id="gambar" name="gambar">
                              </div>

                              <div class="form-group">
                                  <label for="Nama Gambar">Nama Kategori Produk</label>
                                  <input type="text" class="form-control" id="kategori" name="kategori">
                              </div>

                              <div class="form-group">
                                  <label for="Nama Gambar">Deskripsi Kategori Produk</label>
                                  <textarea type="text" class="form-control" row="5" id="deskripsi"
                                      name="deskripsi"></textarea>
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

          <!-- Modal Tambah Home -->
          <div class="modal fade" id="tambahdataEN" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Add Product Category Data</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>

                      <div class="modal-body">
                          <form action="<?= base_url('Kategori/Tkat') ?>" method="POST" enctype="multipart/form-data">
                              <input type="text" id="bhs" name="bhs" value="en" hidden>
                              <div class="form-group">
                                  <label for="Gambar Home">Picture</label>
                                  <input type="file" class="form-control-file" id="gambar" name="gambar">
                              </div>

                              <div class="form-group">
                                  <label for="Nama Gambar">Product Category Name</label>
                                  <input type="text" class="form-control" id="kategori" name="kategori">
                              </div>

                              <div class="form-group">
                                  <label for="Nama Gambar">Product Category Name</label>
                                  <textarea type="text" class="form-control" row="5" id="deskripsi"
                                      name="deskripsi"></textarea>
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
          <?php foreach ($id as $row) : ?>
          <div class="modal fade" id="editkat<?= $row['idKat'] ?>" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Rubah Data Kategori</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>

                      <div class="modal-body">
                          <form action="<?= base_url('Kategori/Ekat') ?>" method="POST" enctype="multipart/form-data">
                              <div class="form-group">
                                  <label for="Gambar Home">Gambar</label>
                              </div>

                              <div class="form-group">
                                  <img class="mb-3" src="<?= base_url('assets1/img-produk/') ?><?= $row['gambar']; ?>"
                                      width="150" height="100" alt="">
                                  <input type="file" class="form-control-file" id="gambar" name="gambar">
                              </div>

                              <div class="form-group">
                                  <label for="Nama Gambar">Nama Kategori Produk</label>
                                  <input type="text" class="form-control" id="kategori" name="kategori"
                                      value="<?= $row['nKategori'] ?>">
                              </div>

                              <div class="form-group">
                                  <label for="Nama Gambar">Deskripsi Kategori Produk</label>
                                  <textarea type="text" class="form-control" row="5" id="deskripsi"
                                      name="deskripsi"><?= $row['deskripsi'] ?></textarea>
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
          <?php endforeach; ?>
          <!-- End Modal Edit Home -->

          <!-- Modal Edit Home -->
          <?php foreach ($en as $row) : ?>
          <div class="modal fade" id="editkat<?= $row['idKat'] ?>" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Change Kategori Data</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>

                      <div class="modal-body">
                          <form action="<?= base_url('Kategori/Ekat') ?>" method="POST" enctype="multipart/form-data">
                              <div class="form-group">
                                  <label for="Gambar Home">Picture</label>
                              </div>

                              <div class="form-group">
                                  <img class="mb-3" src="<?= base_url('assets1/img-produk/') ?><?= $row['gambar']; ?>"
                                      width="150" height="100" alt="">
                                  <input type="file" class="form-control-file" id="gambar" name="gambar">
                              </div>

                              <div class="form-group">
                                  <label for="Nama Gambar">Product Category Name</label>
                                  <input type="text" class="form-control" id="kategori" name="kategori"
                                      value="<?= $row['nKategori'] ?>">
                              </div>

                              <div class="form-group">
                                  <label for="Nama Gambar">Product Category Description</label>
                                  <textarea type="text" class="form-control" row="5" id="deskripsi"
                                      name="deskripsi"><?= $row['deskripsi'] ?></textarea>
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