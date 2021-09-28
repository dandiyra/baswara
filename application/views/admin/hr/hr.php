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
                                  <h2>Data Lowongan</h2>
                                  <div class="btn-tambah">
                                      <a class="btn btn-primary" data-toggle="modal" data-target="#modaltambah"><span
                                              class="mdi mdi-paperclip"></span> Tambah Lowongan Pekerjaan</a>
                                  </div>
                              </div>
                              <div class="card-body pt-0 pb-5">
                                  <table class="table card-table table-responsive table-responsive-large"
                                      style="width:100%">
                                      <thead>
                                          <tr>
                                              <th>Gambar</th>
                                              <th>Nama Pekerjaan</th>
                                              <th>Tanggal Deadline</th>
                                              <th>Tanggal Upload</th>
                                              <th></th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <?php foreach ($hrd as $row) : ?>
                                          <tr>
                                              <td><img class="mb-3"
                                                      src="<?= base_url('assets1/img-produk/') ?><?= $row['gambar']; ?>"
                                                      width="150" height="100" alt=""></td>
                                              <td class="text-dark">
                                                  <?= $row['pekerjaan'] ?>
                                              </td>
                                              <td class="d-none d-lg-table-cell"><?= $row['tanggalD'] ?></td>
                                              <td class="d-none d-lg-table-cell"><?= $row['dUpload'] ?></td>
                                              <td class="text-right">
                                                  <div class="dropdown show d-inline-block widget-dropdown">
                                                      <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                                          id="dropdown-recent-order1" data-toggle="dropdown"
                                                          aria-haspopup="true" aria-expanded="false"
                                                          data-display="static"></a>
                                                      <ul class="dropdown-menu dropdown-menu-right"
                                                          aria-labelledby="dropdown-recent-order1">
                                                          <li class="dropdown-item">
                                                              <a href="#" data-toggle="modal"
                                                                  data-target="#modaledit<?= $row['idHr'] ?>">Edit</a>
                                                          </li>
                                                          <li class="dropdown-item">
                                                              <a
                                                                  href="<?= base_url('Hr/Dlowongan/') ?><?= $row['idHr'] ?>">Remove</a>
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

                  <!-- Add data modal -->
                  <div class="modal fade" id="modaltambah" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalFormTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalFormTitle">Tambah Lowongan Pekerjaan</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>

                              <div class="modal-body">
                                  <form action="<?= base_url('Hr/Tlowongan') ?>" method="POST"
                                      enctype="multipart/form-data">
                                      <div class="form-group">
                                          <label for="Nama Gambar">Nama Lowongan Pekerjaan</label>
                                          <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
                                      </div>

                                      <div class="row">
                                          <div class="col-md">
                                              <div class="form-group">
                                                  <label for="Gambar Home">Gambar</label>
                                                  <input type="file" class="form-control-file" id="gambar"
                                                      name="gambar">
                                              </div>
                                          </div>
                                          <div class="col-md">
                                              <div class="form-group">
                                                  <label for="Nama Gambar">Tanggal Deadline</label>
                                                  <input type="date" class="form-control" id="tanggal" name="tanggal">
                                              </div>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label for="Nama Gambar">Kriteria Pekerjaan</label>
                                          <input type="text" class="form-control" id="kriteriaT" name="kriteria">
                                      </div>

                                      <div class="form-group">
                                          <label for="Nama Gambar">Deskripsi Pekerjaan</label>
                                          <input type="text" class="form-control" id="deskripsiT" name="deskripsi">
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

                  <!-- Edit data modal -->
                  <?php foreach ($hrd as $row) : ?>
                  <div class="modal fade" id="modaledit<?= $row['idHr'] ?>" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalFormTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalFormTitle">Edit Data User</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>

                              <div class="modal-body">
                                  <form action="<?= base_url('Hr/Elowongan/') ?><?= $row['idHr'] ?>" method="POST"
                                      enctype="multipart/form-data">
                                      <div class="form-group">
                                          <label for="Nama Gambar">Nama Lowongan Pekerjaan</label>
                                          <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                                              value="<?= $row['pekerjaan'] ?>">
                                      </div>

                                      <div class="row">
                                          <div class="col-md">
                                              <div class="form-group">
                                                  <label for="Gambar Home">Gambar</label>
                                              </div>

                                              <div class="form-group">
                                                  <img class="mb-3"
                                                      src="<?= base_url('assets1/img-produk/') ?><?= $row['gambar']; ?>"
                                                      width="150" height="100" alt="">
                                              </div>

                                              <div class="form-group">
                                                  <input type="file" class="form-control-file" id="gambar"
                                                      name="gambar">
                                              </div>
                                          </div>
                                          <div class="col-md">
                                              <div class="form-group">
                                                  <label for="Gambar Home">Tanggal Deadline</label>
                                                  <input type="date" class="form-control" id="tanggal" name="tanggal"
                                                      value="<?= $row['tanggalD'] ?>">
                                              </div>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label for="Nama Gambar">Kriteria Pekerjaan</label>
                                          <input type="text" class="form-control" id="kriteriaE" name="kriteria"
                                              value="<?= $row['requirement'] ?>">
                                      </div>

                                      <div class="form-group">
                                          <label for="Nama Gambar">Deksripsi Pekerjaan</label>
                                          <textarea type="text" class="form-control" id="deskripsiE"
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
          <script src="<?= base_url('assets1/') ?>ckeditor5-build-classic/ckeditor.js"></script>

          <script src='<?= base_url("assets1/") ?>plugins/daterangepicker/moment.min.js'></script>
          <script src='<?= base_url("assets1/") ?>plugins/daterangepicker/daterangepicker.js'></script>
          <script src='<?= base_url("assets1/") ?>js/date-range.js'></script>

          <script src='<?= base_url("assets1/") ?>plugins/toastr/toastr.min.js'></script>

          <link href="<?= base_url("assets1/") ?>options/optionswitch.css" rel="stylesheet">
          <script src="<?= base_url("assets1/") ?>options/optionswitcher.js"></script>
          <script src="<?= base_url("assets1/") ?>js/sleek.js"></script>

          <script>
ClassicEditor
    .create(document.querySelector('#kriteriaT'))
    .catch(error => {
        console.error(error);
    });
          </script>

          <script>
ClassicEditor
    .create(document.querySelector('#kriteriaE'))
    .catch(error => {
        console.error(error);
    });
          </script>

          <script>
ClassicEditor
    .create(document.querySelector('#deskripsiT'))
    .catch(error => {
        console.error(error);
    });
          </script>

          <script>
ClassicEditor
    .create(document.querySelector('#deskripsiE'))
    .catch(error => {
        console.error(error);
    });
          </script>
          </body>

          </html>