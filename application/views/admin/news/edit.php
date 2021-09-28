          <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->
          <div class="content-wrapper">
              <div class="content">
                  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

                  <div class="row">
                      <div class="col-12">

                          <!-- Form Tambah Produk -->
                          <div class="col-md">
                              <div class="card card-default">
                                  <div class="card-header card-header-border-bottom">
                                      <h2>Rubah Artikel Berita </h2>
                                  </div>

                                  <div class="card-body">
                                      <form action="" method="post" enctype="multipart/form-data">
                                          <input type="text" id="idnews" name="idnews" value="<?= $dnews['idNews'] ?>"
                                              hidden>
                                          <div class="form-row">
                                              <div class="col-md mb-3">
                                                  <label for="MetaNews">Meta halaman berita</label>

                                                  <input type="text" class="form-control" id="meta"
                                                      placeholder="Masukan judul meta" name="meta"
                                                      value="<?= $dnews['meta'] ?>">

                                                  <span><?= form_error('meta') ?></span>
                                                  <!-- <div class="valid-feedback">
                                                      Looks good!
                                                  </div> -->
                                              </div>
                                              <div class="col-md mb-3">
                                                  <label for="MetaNews">Kata Kunci berita</label>

                                                  <input type="text" class="form-control" id="kunci"
                                                      placeholder="Masukan judul kunci" name="kunci"
                                                      value="<?= $dnews['keyword'] ?>">

                                                  <span><?= form_error('kunci') ?></span>
                                                  <!-- <div class="valid-feedback">
                                                      Looks good!
                                                  </div> -->
                                              </div>
                                          </div>

                                          <div class="form-row">
                                              <div class="col-md mb-3">
                                                  <label for="NamaProduk">Gambar Produk</label>

                                                  <input type="file" class="form-control-file" id="gambar"
                                                      name="gambar">

                                                  <!-- <div class="invalid-feedback">
                                                      Please choose a username.
                                                  </div> -->
                                              </div>

                                              <div class="col-md mb-3">
                                                  <label for="JudulBerita">Judul Berita</label>

                                                  <input type="text" class="form-control" id="JudulBerita" name="judul"
                                                      placeholder="Masukan judul berita" value="<?= $dnews['judul'] ?>">

                                                  <span><?= form_error('judul') ?></span>

                                                  <!-- <div class="invalid-feedback">
                                                      Please choose a username.
                                                  </div> -->
                                              </div>

                                              <div class="col-md mb-3">
                                                  <label for="KategoriBerita">Kategori Berita</label>

                                                  <input type="text" class="form-control" id="kategori" name="kategori"
                                                      placeholder="Masukan kategori berita"
                                                      value="<?= $dnews['kategori'] ?>">

                                                  <span><?= form_error('kategori') ?></span>

                                                  <!-- <div class="invalid-feedback">
                                                      Please choose a username.
                                                  </div> -->
                                              </div>
                                          </div>

                                          <div class="form-row">
                                              <div class="col-md mb-3">
                                                  <label for="artikel">Artikel Berita</label>

                                                  <textarea class="form-control" id="artikel" rows="10"
                                                      placeholder="Masukan artikel berita"
                                                      name="artikel"><?= $dnews['berita'] ?></textarea>

                                                  <span><?= form_error('artikel') ?></span>
                                              </div>
                                          </div>

                                          <button class="btn btn-primary" type="submit">Submit form</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
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
          <script src="<?=base_url("assets1/") ?>plugins/jquery/jquery.min.js"></script>
          <script src="<?=base_url("assets1/") ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="<?=base_url("assets1/") ?>plugins/simplebar/simplebar.min.js"></script>

          <script src='<?=base_url("assets1/") ?>plugins/charts/Chart.min.js'></script>
          <script src='<?=base_url("assets1/") ?>js/chart.js'></script>

          <script src='<?=base_url("assets1/") ?>plugins/jvectormap/jquery-jvectormap-2.0.3.min.js'></script>
          <script src='<?=base_url("assets1/") ?>plugins/jvectormap/jquery-jvectormap-world-mill.js'></script>
          <script src='<?=base_url("assets1/") ?>js/vector-map.js'></script>

          <script src='<?=base_url("assets1/") ?>plugins/daterangepicker/moment.min.js'></script>
          <script src='<?=base_url("assets1/") ?>plugins/daterangepicker/daterangepicker.js'></script>
          <script src='<?=base_url("assets1/") ?>js/date-range.js'></script>
          <script src="<?= base_url('assets1/') ?>ckeditor5-build-classic/ckeditor.js"></script>
          <script src='<?=base_url("assets1/") ?>plugins/toastr/toastr.min.js'></script>

          <link href="<?=base_url("assets1/") ?>options/optionswitch.css" rel="stylesheet">
          <script src="<?=base_url("assets1/") ?>options/optionswitcher.js"></script>
          <script src="<?=base_url("assets1/") ?>js/sleek.js"></script>

          <script>
ClassicEditor
    .create(document.querySelector('#artikel'))
    .catch(error => {
        console.error(error);
    });
          </script>

          </body>

          </html>