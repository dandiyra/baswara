          <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->
          <div class="content-wrapper">
              <div class="content">
                  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

                  <div class="row">
                      <div class="col-12">

                          <?php if ($dproduk['bahasa'] == 'id') { ?>
                          <!-- Form Tambah Produk -->
                          <div class="col-md">
                              <div class="card card-default">
                                  <div class="card-header card-header-border-bottom">
                                      <h2>Tambah Data Produk</h2>
                                  </div>

                                  <div class="card-body">
                                      <form action="" method="post" enctype="multipart/form-data">
                                          <input type="text" id="idproduk" name="idproduk"
                                              value="<?= $dproduk['idProduk'] ?>" hidden>
                                          <div class="form-row">
                                              <div class="col-md mb-3">
                                                  <label for="Header">Header Produk</label>

                                                  <input type="text" class="form-control" id="header"
                                                      placeholder="Masukan judul header" name="header"
                                                      value="<?= $dproduk['header'] ?>">

                                                  <span><?= form_error('header') ?></span>
                                                  <!-- <div class="valid-feedback">
                                                      Looks good!
                                                  </div> -->
                                              </div>
                                          </div>

                                          <div class="form-row">
                                              <div class="col-md-12 mb-3">
                                                  <label for="Keterangan">Keterangan header</label>

                                                  <textarea class="form-control" id="keterangan"
                                                      placeholder="Masukan keterangan header" rows="5"
                                                      name="keterangan"><?= $dproduk['keterangan'] ?></textarea>

                                                  <span><?= form_error('keterangan') ?></span>

                                                  <!-- <div class="valid-feedback">
                                                            Looks good!
                                                        </div> -->
                                              </div>
                                          </div>

                                          <div class="form-row">
                                              <div class="col-md mb-3">
                                                  <label for="NamaProduk">Gambar Produk</label>

                                                  <img class="mb-3"
                                                      src="<?= base_url('assets1/img-produk/') ?><?= $dproduk['gambar']; ?>"
                                                      width="150" height="100" alt="">

                                                  <input type="file" class="form-control-file" id="gambar"
                                                      name="gambar">

                                                  <span><?= form_error('gambar') ?></span>

                                                  <!-- <div class="invalid-feedback">
                                                      Please choose a username.
                                                  </div> -->
                                              </div>

                                              <div class="col-md mb-3">
                                                  <label for="NamaProduk">Nama Produk</label>

                                                  <input type="text" class="form-control" id="NamaProduk" name="produk"
                                                      placeholder="Masukan nama produk"
                                                      value="<?= $dproduk['produk'] ?>">

                                                  <span><?= form_error('produk') ?></span>

                                                  <!-- <div class="invalid-feedback">
                                                      Please choose a username.
                                                  </div> -->
                                              </div>

                                              <div class="col-md mb-3">
                                                  <label for="KategoriProduk">Kategori Produk</label>

                                                  <input type="text" class="form-control" id="Kategori" name="kategori"
                                                      placeholder="Masukan kategori produk"
                                                      value="<?= $dproduk['kategori'] ?>">

                                                  <span><?= form_error('kategori') ?></span>

                                                  <!-- <div class="invalid-feedback">
                                                      Please choose a username.
                                                  </div> -->
                                              </div>
                                          </div>

                                          <div class="form-row">
                                              <div class="col-md mb-3">
                                                  <label for="DeskripsiProduk">Deskripsi Produk</label>

                                                  <textarea class="form-control" id="Deskripsi" name="deskripsi"
                                                      placeholder="Masukan deskripsi produk"
                                                      rows="5"><?= $dproduk['deskripsi'] ?></textarea>

                                                  <span><?= form_error('deskripsi') ?></span>

                                                  <!-- <div class="invalid-feedback">
                                                      Please choose a username.
                                                  </div> -->
                                              </div>
                                          </div>

                                          <div class="form-row">
                                              <div class="col-md mb-3">
                                                  <label for="Spesifikasi">Spesifikasi Produk</label>

                                                  <textarea class="form-control" id="spesifikasi" rows="10"
                                                      name="spesifikasi"
                                                      placeholder="Masukan Spesifikasi produk"><?= $dproduk['spesifikasi'] ?></textarea>

                                                  <span><?= form_error('spesifikasi') ?></span>
                                              </div>
                                          </div>

                                          <div class="form-row">
                                              <div class="col-md mb-3">
                                                  <label for="Kelebihan">Kelebihan Produk</label>

                                                  <textarea class="form-control" id="kelebihan" rows="10"
                                                      placeholder="Masukan kelebihan produk"
                                                      name="kelebihan"><?= $dproduk['keunggulan'] ?></textarea>

                                                  <span><?= form_error('kelebihan') ?></span>
                                              </div>
                                          </div>

                                          <button class="btn btn-primary" type="submit">Submit form</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                          <?php } else if ($dproduk['bahasa'] == 'en') { ?>
                          <!-- Form Tambah Produk -->
                          <div class="col-md">
                              <div class="card card-default">
                                  <div class="card-header card-header-border-bottom">
                                      <h2>Change Data Product</h2>
                                  </div>

                                  <div class="card-body">
                                      <form action="" method="post" enctype="multipart/form-data">
                                          <input type="text" id="idproduk" name="idproduk"
                                              value="<?= $dproduk['idProduk'] ?>" hidden>
                                          <div class="form-row">
                                              <div class="col-md mb-3">
                                                  <label for="Header">Header Produk</label>

                                                  <input type="text" class="form-control" id="header"
                                                      placeholder="Masukan judul header" name="header"
                                                      value="<?= $dproduk['header'] ?>">

                                                  <span><?= form_error('header') ?></span>
                                                  <!-- <div class="valid-feedback">
                                                      Looks good!
                                                  </div> -->
                                              </div>
                                          </div>

                                          <div class="form-row">
                                              <div class="col-md-12 mb-3">
                                                  <label for="Keterangan">Keterangan header</label>

                                                  <textarea class="form-control" id="keterangan"
                                                      placeholder="Masukan keterangan header" rows="5"
                                                      name="keterangan"><?= $dproduk['keterangan'] ?></textarea>

                                                  <span><?= form_error('keterangan') ?></span>

                                                  <!-- <div class="valid-feedback">
                                                            Looks good!
                                                        </div> -->
                                              </div>
                                          </div>

                                          <div class="form-row">
                                              <div class="col-md mb-3">
                                                  <label for="NamaProduk">Gambar Produk</label>

                                                  <img class="mb-3"
                                                      src="<?= base_url('assets1/img-produk/') ?><?= $dproduk['gambar']; ?>"
                                                      width="150" height="100" alt="">

                                                  <input type="file" class="form-control-file" id="gambar"
                                                      name="gambar">

                                                  <span><?= form_error('gambar') ?></span>

                                                  <!-- <div class="invalid-feedback">
                                                      Please choose a username.
                                                  </div> -->
                                              </div>

                                              <div class="col-md mb-3">
                                                  <label for="NamaProduk">Nama Produk</label>

                                                  <input type="text" class="form-control" id="NamaProduk" name="produk"
                                                      placeholder="Masukan nama produk"
                                                      value="<?= $dproduk['produk'] ?>">

                                                  <span><?= form_error('produk') ?></span>

                                                  <!-- <div class="invalid-feedback">
                                                      Please choose a username.
                                                  </div> -->
                                              </div>

                                              <div class="col-md mb-3">
                                                  <label for="KategoriProduk">Kategori Produk</label>

                                                  <input type="text" class="form-control" id="Kategori" name="kategori"
                                                      placeholder="Masukan kategori produk"
                                                      value="<?= $dproduk['kategori'] ?>">

                                                  <span><?= form_error('kategori') ?></span>

                                                  <!-- <div class="invalid-feedback">
                                                      Please choose a username.
                                                  </div> -->
                                              </div>
                                          </div>

                                          <div class="form-row">
                                              <div class="col-md mb-3">
                                                  <label for="DeskripsiProduk">Deskripsi Produk</label>

                                                  <textarea class="form-control" id="Deskripsi" name="deskripsi"
                                                      placeholder="Masukan deskripsi produk"
                                                      rows="5"><?= $dproduk['deskripsi'] ?></textarea>

                                                  <span><?= form_error('deskripsi') ?></span>

                                                  <!-- <div class="invalid-feedback">
                                                      Please choose a username.
                                                  </div> -->
                                              </div>
                                          </div>

                                          <div class="form-row">
                                              <div class="col-md mb-3">
                                                  <label for="Spesifikasi">Spesifikasi Produk</label>

                                                  <textarea class="form-control" id="spesifikasi" rows="10"
                                                      name="spesifikasi"
                                                      placeholder="Masukan Spesifikasi produk"><?= $dproduk['spesifikasi'] ?></textarea>

                                                  <span><?= form_error('spesifikasi') ?></span>
                                              </div>
                                          </div>

                                          <div class="form-row">
                                              <div class="col-md mb-3">
                                                  <label for="Kelebihan">Kelebihan Produk</label>

                                                  <textarea class="form-control" id="kelebihan" rows="10"
                                                      placeholder="Masukan kelebihan produk"
                                                      name="kelebihan"><?= $dproduk['keunggulan'] ?></textarea>

                                                  <span><?= form_error('kelebihan') ?></span>
                                              </div>
                                          </div>

                                          <button class="btn btn-primary" type="submit">Submit form</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                          <?php } ?>
                      </div>
                  </div> <!-- End Content -->
              </div> <!-- End Content Wrapper -->

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
          <script src="<?= base_url('assets1/') ?>ckeditor5-build-classic/ckeditor.js"></script>
          <script src='<?= base_url("assets1/") ?>plugins/toastr/toastr.min.js'></script>

          <link href="<?= base_url("assets1/") ?>options/optionswitch.css" rel="stylesheet">
          <script src="<?= base_url("assets1/") ?>options/optionswitcher.js"></script>
          <script src="<?= base_url("assets1/") ?>js/sleek.js"></script>

          <script>
ClassicEditor
    .create(document.querySelector('#spesifikasi'))
    .catch(error => {
        console.error(error);
    });
          </script>

          <script>
ClassicEditor
    .create(document.querySelector('#kelebihan'))
    .catch(error => {
        console.error(error);
    });
          </script>
          </body>

          </html>