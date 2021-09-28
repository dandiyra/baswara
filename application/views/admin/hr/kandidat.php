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
                         <h2>Data Kandidat Lowongan Pekerjaan</h2>
                     </div>
                     <div class="card-body pt-0 pb-5">
                         <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                             <thead>
                                 <tr>
                                     <th>Gambar</th>
                                     <th>Nama Pekerjaan</th>
                                     <th>Nama Kandidat</th>
                                     <th>Tanggal Upload</th>
                                     <th>Tanggal Deadline</th>
                                     <th></th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php foreach ($cr as $row) : ?>
                                 <tr>
                                     <td><img class="mb-3"
                                             src="<?= base_url('assets1/img-produk/') ?><?= $row['gambar']; ?>"
                                             width="150" height="100" alt=""></td>
                                     <td class="text-dark">
                                         <?= $row['pekerjaan'] ?>
                                     </td>
                                     <td class="d-none d-lg-table-cell"><?= $row['nama'] ?></td>
                                     <td class="d-none d-lg-table-cell"><?= $row['tanggalU'] ?></td>
                                     <td class="d-none d-lg-table-cell"><?= $row['tanggalD'] ?></td>
                                     <td class="text-right">
                                         <div class="dropdown show d-inline-block widget-dropdown">
                                             <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                                 id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true"
                                                 aria-expanded="false" data-display="static"></a>
                                             <ul class="dropdown-menu dropdown-menu-right"
                                                 aria-labelledby="dropdown-recent-order1">
                                                 <li class="dropdown-item">
                                                     <a href="#" data-toggle="modal"
                                                         data-target="#modalview<?= $row['idKarir'] ?>">View</a>
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
 <!-- End Modal Logout -->

 <!-- Modal View Kandidat -->
 <?php foreach ($cr as $c) : ?>
 <div class="modal fade" id="modalview<?= $c['idKarir'] ?>" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLongTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLongTitle"><?= $c['pekerjaan'] ?></h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="<?= base_url('Career/upload') ?>" method="post">
                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="exampleFormControlInput1">Full Name</label>
                                 <input type="text" class="form-control" id="name" name="nama"
                                     placeholder="Masukan Nama Lengkap" value="<?= $c['nama'] ?>">
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="exampleFormControlInput1">Email address</label>
                                 <input type="email" class="form-control" id="email" name="email"
                                     placeholder="email.anda@example.com" value="<?= $c['email'] ?>">
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md">
                             <div class="form-group">
                                 <label for="exampleFormControlSelect1">Gender</label>
                                 <select class="form-control" id="gender" name="gender">
                                     <option value="" selected disabled> <?= $c['gender'] ?> </option>
                                 </select>
                             </div>
                         </div>
                         <div class="col-md">
                             <div class="form-group">
                                 <label for="exampleFormControlInput1">Date of Birth</label>
                                 <input type="date" class="form-control" id="lahir" name="tanggal"
                                     placeholder="masukan tanggal lahir" value="<?= $c['tanggalL'] ?>">
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md">
                             <div class="form-group">
                                 <label for="exampleFormControlSelect1">Maritial Status</label>
                                 <select class="form-control" id="status" name="status">
                                     <option value="" selected disabled><?= $c['status'] ?></option>
                                 </select>
                             </div>
                         </div>
                         <div class="col-md">
                             <div class="form-group">
                                 <label for="exampleFormControlTextarea1">NIK</label>
                                 <input type="number" placeholder="314571xxxx" class="form-control" id="nik" name="nik"
                                     value="<?= $c['NIK'] ?>" />
                             </div>
                         </div>
                     </div>

                     <div class="form-group">
                         <label for="exampleFormControlTextarea1">Phone Number</label>
                         <input type="number" placeholder="+628512xxx" id="telepon" name="telepon" class="form-control"
                             value="<?= $c['telepon'] ?>" />
                     </div>
                     <!-- <div class="col-md">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Upload Your Resume</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </div> -->
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <?php endforeach; ?>


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

 </body>

 </html>