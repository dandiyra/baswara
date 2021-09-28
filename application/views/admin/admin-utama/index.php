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
                                  <h2>Data User</h2>
                                  <div class="btn-tambah">
                                      <a class="btn btn-primary" data-toggle="modal" data-target="#modaltambah"><span
                                              class="mdi mdi-account"></span> Tambah User</a>
                                  </div>
                              </div>
                              <div class="card-body pt-0 pb-5">
                                  <table class="table card-table table-responsive table-responsive-large"
                                      style="width:100%">
                                      <thead>
                                          <tr>
                                              <th>Nama User</th>
                                              <th>Email User</th>
                                              <th>Telepon</th>
                                              <th>Role</th>
                                              <th></th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <?php foreach ($user as $row) : ?>
                                          <tr>
                                              <td><?= $row['nama'] ?></td>
                                              <td class="text-dark">
                                                  <?= $row['email'] ?>
                                              </td>
                                              <td class="d-none d-lg-table-cell"><?= $row['telepon'] ?></td>
                                              <?php if ($row['roleId'] == 0) { ?>
                                              <td>Admin Utama</td>
                                              <?php } else if ($row['roleId'] == 1) { ?>
                                              <td>Admin Support</td>
                                              <?php } elseif ($row['roleId'] == 2) { ?>
                                              <td>HR</td>
                                              <?php } ?>
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
                                                                  data-target="#modaledit<?= $row['idUser'] ?>">Edit</a>
                                                          </li>
                                                          <li class="dropdown-item">
                                                              <a
                                                                  href="<?= base_url('AdmM/Duser/') ?><?= $row['idUser'] ?>">Remove</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <?php endforeach ; ?>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div> <!-- End Content -->
                  </div> <!-- End Content Wrapper -->

                  <!-- Add data modal -->
                  <div class="modal fade" id="modaltambah" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalFormTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalFormTitle">Tambah Data User</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>

                              <div class="modal-body">
                                  <form action="<?= base_url('AdmM/Tuser') ?>" method="POST">

                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Nama User</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1"
                                              aria-describedby="emailHelp" name="user"
                                              placeholder="Masukan nama pengguna">
                                      </div>

                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Email User</label>
                                          <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                              aria-describedby="emailHelp" placeholder="Masukan email pengguna">
                                      </div>

                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Password User</label>
                                          <input type="password" class="form-control" name="password"
                                              id="exampleInputEmail1" aria-describedby="emailHelp"
                                              placeholder="Masukan password pengguna">
                                      </div>

                                      <div class="form-group">
                                          <label for="exampleInputPassword1">Nomor Telepon</label>
                                          <input type="number" class="form-control" name="telepon"
                                              id="exampleInputPassword1" placeholder="Masukan No telepon pengguna">
                                      </div>

                                      <div class="form-group">
                                          <label for="exampleFormControlSelect12">Example select</label>
                                          <select class="form-control" id="exampleFormControlSelect12" name="role">
                                              <option value="0">Admin Utama</option>
                                              <option value="1">Admin Support</option>
                                              <option value="2">HR</option>
                                          </select>
                                      </div>

                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-danger btn-pill"
                                              data-dismiss="modal">Cancel</button>
                                          <button type="submit" class="btn btn-primary btn-pill">Submit Data</button>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Edit data modal -->
                  <?php foreach ($user as $row) : ?>
                  <div class="modal fade" id="modaledit<?= $row['idUser'] ?>" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalFormTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalFormTitle">Edit Data User</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>

                              <div class="modal-body">
                                  <form action="<?= base_url('AdmM/Euser/') ?><?= $row['idUser'] ?>" method="POST">

                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Nama User</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1"
                                              aria-describedby="emailHelp" name="user" value="<?= $row['nama'] ?>">
                                      </div>

                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Email User</label>
                                          <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                              aria-describedby="emailHelp" value="<?= $row['email'] ?>">
                                      </div>

                                      <div class="form-group">
                                          <label for="exampleInputPassword1">Nomor Telepon</label>
                                          <input type="number" class="form-control" name="telepon"
                                              id="exampleInputPassword1" value="<?= $row['telepon'] ?>">
                                      </div>

                                      <div class="form-group">
                                          <label for="exampleFormControlSelect12">Example select</label>
                                          <select class="form-control" id="exampleFormControlSelect12" name="role">
                                              <?php if ($row['roleId'] == 0) { ?>
                                              <option value="<? $row['roleId'] ?>" selected> -- Admin Utama -- </option>
                                              <?php } else if ($row['roleId'] == 1) { ?>
                                              <option value="<? $row['roleId'] ?>" selected>-- Admin Support --</option>
                                              <?php } else if ($row['roleId'] == 2) { ?>
                                              <option value="<? $row['roleId'] ?>" selected>-- HR --</option>
                                              <?php } ?>
                                              <option value="0">Admin Utama</option>
                                              <option value="1">Admin Support</option>
                                              <option value="2">HR</option>
                                          </select>
                                      </div>

                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-danger btn-pill"
                                              data-dismiss="modal">Cancel</button>
                                          <button type="submit" class="btn btn-primary btn-pill">Submit Data</button>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  <?php endforeach ;?>

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
          </body>

          </html>