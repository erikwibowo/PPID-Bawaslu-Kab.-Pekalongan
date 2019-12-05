<section class="blog_area single-post-area">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 posts-list">
            <div class="single-post">
               <div class="feature-img">
                  <img class="img-fluid" src="<?= base_url() ?>assets/ppidv1/img/luwakode/header2.png" alt="">
               </div>
               <div class="blog_details">
                  <h1><?= $subtitle ?></h1>
                  <div class="section-top-border">
                     <!-- <h3 class="mb-30">Pengumuman</h3> -->
                     <table width="100%" id="tabel-data" class="table datatable table-stripped table-hover">
                        <thead>
                           <td><b>#</b></td>
                           <td width="40%"><b>Nama</b></td>
                           <td><b>Unduhan</b></td>
                           <td><b>Link</b></td>
                        </thead>
                        <tbody class="table-row" style="padding: 20px">
                           <?php $no=1; foreach ($data as $berkala){ ?>
                           <tr>
                              <td><?= $no++ ?></td>
                              <td><?= $berkala->nama_informasi ?></td>
                              <td><?= $berkala->unduhan_informasi ?></td>
                              <td><a href="<?= site_url('ppid/unduh?id='.$berkala->id_informasi.'&link='.$berkala->link_informasi) ?>" target="_blank"><img src="<?= base_url() ?>assets/ppidv1/img/luwakode/btn_download.png" height="30px" ></a></td>
                           </tr>
                           <?php } ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <?php $this->load->view('ppid/right_sidebar_blog'); ?>
      </div>
   </div>
</section>