<!-- banner part start-->
<section class="banner_part" style="background-image: url(<?= base_url() ?>assets/ppidv1/img/luwakode/banner_img.png);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-6">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h1><span>PPID Bawaslu</span><br/>
                        Kabupaten Pekalongan</h1>
                        <p style="background-color: #fff; padding: 10px;">Terwujudnya Bawaslu sebagai Lembaga Pengawal Terpercaya dalam Penyelenggaraan Pemilu Demokratis, Bermartabat, dan Berkualitas.  </p>
                        <a href="<?= site_url() ?>ppid/form-permohonan-informasi" class="btn_1">Form Permohonan Informasi </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->
<!--services part start-->
<section class="our_service section_padding single_page_services" style="margin-top: -30px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="section_tittle">
                    <center>
                    <h2>info publik</h2>
                    </center>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_service">
                        <img src="<?= base_url() ?>/assets/ppidv1/img/luwakode/i_berkala.png" width="50%" style="padding: 15px;">
                        <h4>Informasi <br/>Berkala</h4>
                        <p>Informasi yang di perbarui secara berkala</p>
                        <a href="<?= site_url() ?>ppid/informasi/informasi-berkala" class="genric-btn primary circle arrow">Lihat Data</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_service">
                        <img src="<?= base_url() ?>/assets/ppidv1/img/luwakode/i_tiap_saat.png" width="50%" style="padding: 15px;">
                        <h4>Informasi <br/>Setiap Saat</h4>
                        <p>Informasi yang di perbarui setiap saat.</p>
                        <a href="<?= site_url() ?>ppid/informasi/informasi-setiap-saat" class="genric-btn primary circle arrow">Lihat Data</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_service">
                        <img src="<?= base_url() ?>/assets/ppidv1/img/luwakode/i_merta.png" width="50%" style="padding: 15px;">
                        <h4>Informasi <br/>Serta Merta</h4>
                        <p>Informasi yang di berupa serta merta informasi.</p>
                        <a href="<?= site_url() ?>ppid/informasi/informasi-serta-merta" class="genric-btn primary circle arrow">Lihat Data</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_service">
                        <img src="<?= base_url() ?>/assets/ppidv1/img/luwakode/i_kecuali.png" width="50%" style="padding: 15px;">
                        <h4>Informasi <br/>Dikecualikan</h4>
                        <p>Informasi yang dikecualikan</p><br/>
                        <a href="<?= site_url() ?>ppid/informasi/informasi-dikecualikan" class="genric-btn primary circle arrow">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about part start-->
<section class="about_part section_padding" style="margin-top: -30px">
    <div class="container">
        <div class="section_tittle">
            <h2>media sosial</h2>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-md-4 col-lg-4">
                
                <div class="about_part_img">
                    <img src="<?= base_url() ?>/assets/ppidv1/img/luwakode/sosmed.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="about_part_text">
                    <center>
                    <a class="twitter-timeline" data-width="100%" data-height="500"  href="https://twitter.com/bawaslukabpkl?ref_src=twsrc%5Etfw">Tweets by bawaslukabpkl</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </center>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="about_part_text">
                    <div class="col-md-4 col-lg-4">
                        <center>
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fbawaslukabpekalongan%2F&tabs=timeline&width=400&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="400" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="1" allowTransparency="true" allow="encrypted-media"></iframe>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about part end-->

<!--::blog_part start::-->
<section class="blog_part section_padding">
    <div class="container">
        <div class="row ">
            <div class="col-xl-5">
                <div class="section_tittle ">
                    <h2>info terbaru</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($this->Mberita->beritaLimit() as $berita){ ?>
            <div class="col-sm-6 col-lg-3 col-xl-3">
                <div class="single-home-blog">
                    <div class="card">
                        <img src="<?= $berita['gambar'] ?>" class="card-img-top" alt="blog">
                        <div class="card-body">
                            <ul>
                                <li style="color: #83868c; font-family: "Roboto", sans-serif;"> <span class="ti-pin-alt"></span><?= $berita['tanggal'] ?></li>
                                <li style="color: #83868c; font-family: "Roboto", sans-serif;"> <span class="ti-eye"></span><?= $berita['dibaca'] ?></li>
                            </ul>
                            <a href="<?= $berita['judul_seo'] ?>" target="_blank">
                                <h5 class="card-title"><?= $berita['judul'] ?></h5>
                            </a>
                            <a href="<?= $berita['judul_seo'] ?>" target="_blank" class="btn_3">Baca Berita</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!--::blog_part end::-->
<!-- about part start-->
<section class="about_part section_padding" style="margin-top: -30px; height: 420px">
    <div class="container">
        <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.9613114227334!2d109.58899552913098!3d-7.027469599682746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e701f31d059f8a9%3A0x71f4658bb7ad9c42!2sKantor%20Bawaslu%20Kab.Pekalongan!5e0!3m2!1sen!2sid!4v1575036329222!5m2!1sen!2sid" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
    </div>
</section>
<!-- about part end-->