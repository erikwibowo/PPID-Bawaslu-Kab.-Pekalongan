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
                     <div class="col-lg-12 col-md-12">
                        <?php if (!empty($this->session->flashdata('notif'))) { ?>
                        <div class="alert alert-<?= $this->session->flashdata('type') ?> alert-dismissible fade show" role="alert">
                          <strong>Pemberitahuan!</strong> <?= $this->session->flashdata('notif') ?>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <?php } ?>
                        <form method="POST" action="<?= site_url('ppid/proses-permohonan-informasi') ?>" enctype='multipart/form-data'>
                           <div class="mt-10">
                              <label>Nama Lengkap</label>
                              <input type="text" name="nama_pemohon" placeholder="Nama Lengkap Pemohon" required class="single-input">
                           </div>
                           <div class="mt-10">
                              <label>Alamat Lengkap</label>
                              <textarea name="alamat_pemohon" placeholder="Alamat Lengkap Pemohon (KTP)" required class="single-input"></textarea>
                           </div>
                           <div class="mt-10">
                              <label>Nomor Telepon</label>
                              <input type="text" name="telp_pemohon" placeholder="Nomor Telepon" required class="single-input">
                           </div>
                           <div class="mt-10">
                              <label>Email</label>
                              <input type="email" name="email_pemohon" placeholder="Email" required class="single-input">
                              <p style="color: blue">Data informasi akan dikirimkan melalui email</p>
                           </div>
                           <div class="mt-10">
                              <label>Foto KTP</label>
                              <input type="file" name="foto" required class="single-input">
                              <p style="color: blue">Format jpg/png/jpeg. Resolusi maksimal 5000x5000px ukuran maksimal 5MB</p>
                           </div>
                           <div class="mt-10">
                              <label>Data Informasi yang Diminta</label>
                              <textarea name="permohonan_informasi" placeholder="Ketikkan data informasi yang diminta. Contoh : Data pemilu 2019" required class="single-input"></textarea>
                           </div>
                           <div class="mt-10">
                              <button class="genric-btn danger radius" type="reset">RESET</button>
                              <button class="genric-btn primary radius" type="submit">KIRIM</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php $this->load->view('ppid/right_sidebar_blog'); ?>
      </div>
   </div>
</section>