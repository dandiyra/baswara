          <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->
          <div class="content-wrapper">
              <div class="content">
                  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

                  <div class="row">
                      <div class="col-12">

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

                          <!-- Form Tambah Produk -->
                          <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active" id="ID" role="tabpanel"
                                  aria-labelledby="login-tab">
                                  <div class="col-md">
                                      <div class="card card-default">
                                          <div class="card-header card-header-border-bottom">
                                              <h2>Tambah Data Produk</h2>
                                          </div>

                                          <div class="card-body">
                                              <form action="" method="post" enctype="multipart/form-data">
                                                  <input type="text" id="bhs" name="bhs" value="id" hidden>

                                                  <div class="form-row">
                                                      <div class="col-md mb-3">
                                                          <label for="Header">Header Produk (ID)</label>

                                                          <input type="text" class="form-control" id="header"
                                                              placeholder="Masukan judul header" name="header">

                                                          <span><?= form_error('header') ?></span>
                                                          <!-- <div class="valid-feedback">
                                                      Looks good!
                                                  </div> -->
                                                      </div>
                                                  </div>

                                                  <div class="form-row">
                                                      <div class="col-md mb-3">
                                                          <label for="Keterangan">Keterangan header (ID)</label>

                                                          <textarea class="form-control" id="keterangan"
                                                              placeholder="Masukan keterangan header" rows="5"
                                                              name="keterangan"></textarea>

                                                          <span><?= form_error('keterangan') ?></span>

                                                          <!-- <div class="valid-feedback">
                                                            Looks good!
                                                        </div> -->
                                                      </div>
                                                  </div>

                                                  <div class="form-row">
                                                      <div class="col-md mb-3">
                                                          <label for="NamaProduk">Gambar Produk (ID)</label>

                                                          <input type="file" class="form-control-file" id="gambar"
                                                              name="gambar">

                                                          <!-- <div class="invalid-feedback">
                                                      Please choose a username.
                                                  </div> -->
                                                      </div>

                                                      <div class="col-md mb-3">
                                                          <label for="NamaProduk">Nama Produk (ID)</label>

                                                          <input type="text" class="form-control" id="NamaProduk"
                                                              name="produk" placeholder="Masukan nama produk">

                                                          <span><?= form_error('produk') ?></span>

                                                          <!-- <div class="invalid-feedback">
                                                          Please choose a username.
                                                      </div> -->
                                                      </div>
                                                  </div>

                                                  <div class="form-row">
                                                      <div class="col-md mb-3">
                                                          <label for="KategoriProduk">Kategori Produk (ID)</label>

                                                          <input type="text" class="form-control" id="kategori"
                                                              name="kategori" placeholder="Masukan kategori produk">

                                                          <span><?= form_error('kategori') ?></span>

                                                          <!-- <div class="invalid-feedback">
                                                      Please choose a username.
                                                  </div> -->
                                                      </div>
                                                  </div>

                                                  <div class="form-row">
                                                      <div class="col-md mb-3">
                                                          <label for="DeskripsiProduk">Deskripsi Produk (ID)</label>

                                                          <textarea class="form-control" id="Deskripsi" name="deskripsi"
                                                              placeholder="Masukan deskripsi produk"
                                                              rows="5"></textarea>

                                                          <span><?= form_error('deskripsi') ?></span>

                                                          <!-- <div class="invalid-feedback">
                                                      Please choose a username.
                                                  </div> -->
                                                      </div>
                                                  </div>

                                                  <div class="form-row">
                                                      <div class="col-md mb-3">
                                                          <label for="Spesifikasi">Spesifikasi Produk (ID)</label>

                                                          <textarea class="form-control" id="spesifikasiID" rows="10"
                                                              name="spesifikasi"
                                                              placeholder="Masukan Spesifikasi produk"></textarea>

                                                          <span><?= form_error('spesifikasi') ?></span>
                                                      </div>
                                                  </div>

                                                  <div class="form-row">
                                                      <div class="col-md mb-3">
                                                          <label for="Kelebihan">Kelebihan Produk (ID)</label>

                                                          <textarea class="form-control" id="kelebihanID" rows="10"
                                                              placeholder="Masukan kelebihan produk"
                                                              name="kelebihan"></textarea>

                                                          <span><?= form_error('kelebihan') ?></span>
                                                      </div>
                                                  </div>

                                                  <button class="btn btn-primary" type="submit">Submit form</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="EN" role="tabpanel" aria-labelledby="signup-tab">
                                  <div class="col-md">
                                      <div class="card card-default">
                                          <div class="card-header card-header-border-bottom">
                                              <h2>Add Product</h2>
                                          </div>

                                          <div class="card-body">
                                              <form action="" method="post" enctype="multipart/form-data">
                                                  <input type="text" id="bhs" name="bhs" value="en" hidden>
                                                  <div class="form-row">
                                                      <div class="col-md mb-3">
                                                          <label for="Header">Product Header (EN)</label>

                                                          <input type="text" class="form-control" id="headerEN"
                                                              placeholder="Masukan judul header" name="header">

                                                          <span><?= form_error('header') ?></span>
                                                          <!-- <div class="valid-feedback">
                                                      Looks good!
                                                  </div> -->
                                                      </div>
                                                  </div>

                                                  <div class="form-row">
                                                      <div class="col-md mb-3">
                                                          <label for="Keterangan">Header Product Description
                                                              (EN)</label>

                                                          <textarea class="form-control" id="keterangan"
                                                              placeholder="Masukan keterangan header" rows="5"
                                                              name="keterangan"></textarea>

                                                          <span><?= form_error('keterangan') ?></span>

                                                          <!-- <div class="valid-feedback">
                                                            Looks good!
                                                        </div> -->
                                                      </div>
                                                  </div>

                                                  <div class="form-row">

                                                      <div class="col-md mb-3">
                                                          <label for="NamaProduk">Product Picture (EN)</label>

                                                          <input type="file" class="form-control-file" id="gambar"
                                                              name="gambar">

                                                          <!-- <div class="invalid-feedback">
                                                      Please choose a username.
                                                  </div> -->
                                                      </div>

                                                      <div class="col-md mb-3">
                                                          <label for="NamaProduk">Product Name (EN)</label>

                                                          <input type="text" class="form-control" id="NamaProduk"
                                                              name="produk" placeholder="Masukan nama produk">

                                                          <span><?= form_error('produk') ?></span>

                                                          <!-- <div class="invalid-feedback">
                                                          Please choose a username.
                                                      </div> -->
                                                      </div>
                                                  </div>

                                                  <div class="form-row">
                                                      <div class="col-md mb-3">
                                                          <label for="KategoriProduk">Product Category (EN)</label>

                                                          <input type="text" class="form-control" id="kategori"
                                                              name="kategori" placeholder="Masukan kategori produk">

                                                          <span><?= form_error('kategori') ?></span>

                                                          <!-- <div class="invalid-feedback">
                                                      Please choose a username.
                                                  </div> -->
                                                      </div>
                                                  </div>

                                                  <div class="form-row">
                                                      <div class="col-md mb-3">
                                                          <label for="DeskripsiProduk">Product Description (EN)</label>

                                                          <textarea class="form-control" id="DeskripsiEN"
                                                              name="deskripsi" placeholder="Masukan deskripsi produk"
                                                              rows="5"></textarea>

                                                          <span><?= form_error('deskripsi') ?></span>

                                                          <!-- <div class="invalid-feedback">
                                                      Please choose a username.
                                                  </div> -->
                                                      </div>
                                                  </div>

                                                  <div class="form-row">
                                                      <div class="col-md mb-3">
                                                          <label for="Spesifikasi">Product Specification (EN)</label>

                                                          <textarea class="form-control" id="spesifikasiEN" rows="10"
                                                              name="spesifikasi"
                                                              placeholder="Masukan Spesifikasi produk"></textarea>

                                                          <span><?= form_error('spesifikasi') ?></span>
                                                      </div>
                                                  </div>

                                                  <div class="form-row">
                                                      <div class="col-md mb-3">
                                                          <label for="Kelebihan">Product Advantage (EN)</label>

                                                          <textarea class="form-control" id="kelebihanEN" rows="10"
                                                              placeholder="Masukan kelebihan produk"
                                                              name="kelebihan"></textarea>

                                                          <span><?= form_error('kelebihan') ?></span>
                                                      </div>
                                                  </div>

                                                  <button class="btn btn-primary" type="submit">Submit form</button>
                                              </form>
                                          </div>
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
          <script src="<?= base_url('assets1/') ?>ckeditor5-build-classic/ckeditor.js"></script>
          <script src='<?= base_url("assets1/") ?>plugins/toastr/toastr.min.js'></script>

          <link href="<?= base_url("assets1/") ?>options/optionswitch.css" rel="stylesheet">
          <script src="<?= base_url("assets1/") ?>options/optionswitcher.js"></script>
          <script src="<?= base_url("assets1/") ?>js/sleek.js"></script>

          <script>
ClassicEditor
    .create(document.querySelector('#spesifikasiID'))
    .catch(error => {
        console.error(error);
    });
          </script>

          <script>
ClassicEditor
    .create(document.querySelector('#spesifikasiEN'))
    .catch(error => {
        console.error(error);
    });
          </script>

          <script>
ClassicEditor
    .create(document.querySelector('#kelebihanID'))
    .catch(error => {
        console.error(error);
    });
          </script>

          <script>
ClassicEditor
    .create(document.querySelector('#kelebihanEN'))
    .catch(error => {
        console.error(error);
    });
          </script>
          </body>

          </html>