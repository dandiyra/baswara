 <?php
    $user_id = $this->session->userdata('idUser');;
    $this->db->select('*');
    $this->db->from('menu a');
    $this->db->join('access b', 'b.menu_id=a.idMenu');
    $this->db->where('idUser', $user_id);
    $this->db->order_by('menu_id', 'ASC');
    $queryCoba = $this->db->get();
    $coba = $queryCoba->result_array();
    ?>

 <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
 <aside class="left-sidebar bg-sidebar">
     <div id="sidebar" class="sidebar sidebar-with-footer">
         <!-- Aplication Brand -->
         <div class="app-brand">
             <a href="<?=base_url('AdmM/')?>" title="Sleek Dashboard"> <img src="<?= base_url('assets/') ?>img/logo2.png"
                     class="img-fluid" alt="">
                 <span class="brand-name text-truncate"></span>
             </a>
         </div>

         <!-- begin sidebar scrollbar -->
         <div class="" data-simplebar style="height: 100%;">
             <!-- sidebar menu -->
             <ul class="nav sidebar-inner" id="sidebar-menu">
                 <!-- <li class="has-sub active expand">
                     <a class="sidenav-item-link" href="<//?= base_url('Access/') ?>" aria-expanded="false"
                         aria-controls="dashboard">
                         <i class="mdi mdi-view-dashboard-outline"></i>
                         <span class="nav-text">Access</span>
                     </a>
                 </li> -->
                 <?php foreach ($coba as $sm) : ?>
                 <?php
                        $menuId = $sm['idMenu'];
                        $querySubMenu = "SELECT * 
                              FROM `sub_menu`
                             WHERE `menu_id` = $menuId";
                        $subMenu = $this->db->query($querySubMenu)->result_array();
                        ?>
                 <li class="has-sub expand">
                     <a class="sidenav-item-link" href="<?= base_url($sm['url']) ?>" aria-expanded="false"
                         aria-controls="dashboard">
                         <i class="<?= $sm['icon'] ?>"></i>
                         <span class="nav-text"><?= $sm['title'] ?></span>
                     </a>
                     <?php foreach ($subMenu as $m) : ?>
                     <ul id="dashboard" data-parent="#sidebar-menu">
                         <div class="sub-menu">
                             <li class="">
                                 <a class="sidenav-item-link" href="<?= $m['url'] ?>">
                                     <i class="<?= $m['icon'] ?>"></i><span class="nav-text"><?= $m['title'] ?></span>
                                 </a>
                             </li>
                         </div>
                     </ul>
                     <?php endforeach; ?>
                 </li>
                 <?php endforeach; ?>
             </ul>
         </div>

     </div>
 </aside>