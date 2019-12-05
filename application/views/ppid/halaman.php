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
						</h1>
						<!-- <ul class="blog-info-link mt-3 mb-4">
							<li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
							<li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
						</ul>   -->
						<?= $data->isi_halaman ?>
					</div>
               </div>
            </div>
         </div>
         <?php $this->load->view('ppid/right_sidebar_blog'); ?>
      </div>
   </div>
</section>