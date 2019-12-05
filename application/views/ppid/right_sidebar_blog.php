<div class="col-lg-4">
   <div class="blog_right_sidebar">
      <aside class="single_sidebar_widget search_widget">
         <form action="#">
            <div class="form-group">
               <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder='Search Keyword'
                  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                  <div class="input-group-append">
                     <button class="btn" type="button"><i class="ti-search"></i></button>
                  </div>
               </div>
            </div>
            <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Search</button>
         </form>
      </aside>
      <aside class="single_sidebar_widget post_category_widget">
         <h4 class="widget_title">Kategori Informasi</h4>
         <ul class="list cat-list">
            <?php foreach ($this->Mkategori_informasi->readByJumlah()->result() as $key ): ?>
            <li>
               <a href="<?= site_url('ppid/informasi/'.$key->slug_kategori_informasi) ?>" class="d-flex">
                  <p><?= $key->kategori_informasi ?></p>
                  <p> ( <?= $key->jumlah ?> ) </p>
               </a>
            </li>
            <?php endforeach ?>
         </ul>
      </aside>
      <aside class="single_sidebar_widget popular_post_widget">
         <h3 class="widget_title">Informasi Terbaru</h3>
         <?php foreach ($this->Mberita->beritaLimit() as $key): ?>
         <div class="media post_item">
            <img width="30%" height="30%" src="<?= $key['gambar'] ?>" alt="post">
            <div class="media-body">
               <a target="_blank" href="<?= $key['judul_seo'] ?>">
                  <h3><?= $key['judul'] ?></h3>
               </a>
               <p><?= $key['tanggal'] ?></p>
            </div>
         </div>
         <?php endforeach ?>
      </aside>
   </div>
</div>