<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?= $title ?></title>
        <link rel="icon" href="<?= base_url() ?>assets/ppidv1/img/luwakode/icon.png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/ppidv1/css/bootstrap.min.css">
        <!-- animate CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/ppidv1/css/animate.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/ppidv1/css/owl.carousel.min.css">
        <!-- themify CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/ppidv1/css/themify-icons.css">
        <!-- flaticon CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/ppidv1/css/flaticon.css">
        <!-- font awesome CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/ppidv1/css/magnific-popup.css">
        <!-- swiper CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/ppidv1/css/slick.css">
        <!-- style CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/ppidv1/css/style.css">
        <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    <body>
        <?php $this->load->view('ppid/menu_header'); ?>
        <?php $this->load->view('ppid/content'); ?>
        <!-- footer part start-->
        <footer class="footer-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-sm-6 col-md-6 col-xl-6">
                        <div class="single-footer-widget footer_1">
                            <a href="index.html"> <img src="<?= base_url() ?>/assets/ppidv1/img/luwakode/logo_footer.png" alt=""> </a>
                            <p>Pejabat Pengelola Informasi dan Dokumentasi<br/>Badan Pengawas Pemilihan Umum<br/>Kabupaten Pekalongan</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-6 col-md-6">
                        <div class="single-footer-widget footer_2">
                            <h4>Informasi Kontak</h4>
                            <div class="contact_info">
                                <!-- <p>Bawaslu Kabupaten Pekalongan</p> -->
                                <a style="color: #ff5e13" href="https://www.google.com/maps/place/Bawaslu+Kab+Pekalongan/@-7.0274261,109.5873428,17z/data=!3m1!4b1!4m5!3m4!1s0x2e701f3d0a4834a1:0x1cbd60ec3488a090!8m2!3d-7.0274314!4d109.5895315"><span><i class="fa fa-map-marker"></i> </span><?= web_info('alamat') ?> </a><br>
                                <a style="color: #ff5e13" href="tel:<?= web_info('telepon') ?>"><span><i class="fa fa-phone"></i></span> <?= web_info('telepon') ?></a><br>
                                <a style="color: #ff5e13" href="https://wa.me/<?= web_info('wa') ?>/?text=Halo%20admin <?= web_info('nama_lengkap_website') ?>"><span><i class="fa fa-whatsapp"></i> </span><?= web_info('wa') ?></a><br>
                                <a style="color: #ff5e13" href="mailto:<?= web_info('email') ?>"><span><i class="fa fa-at"></i> </span> <?= web_info('email') ?> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright_part_text text-center">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="<?= site_url() ?>" target="_blank"><?= web_info('nama_lengkap_website') ?></a>
                                    <a style="color: #06151F" href="https://colorlib.com" target="_blank">Colorlib</a> <a style="color: #06151F" href="https://luwakode.com" target="_blank">Luwakode</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer part end-->
        <!-- jquery plugins here-->
        <!-- jquery -->
        <script src="<?= base_url() ?>assets/ppidv1/js/jquery-1.12.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <!-- popper js -->
        <script src="<?= base_url() ?>assets/ppidv1/js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="<?= base_url() ?>assets/ppidv1/js/bootstrap.min.js"></script>
        <!-- easing js -->
        <script src="<?= base_url() ?>assets/ppidv1/js/jquery.magnific-popup.js"></script>
        <!-- swiper js -->
        <script src="<?= base_url() ?>assets/ppidv1/js/swiper.min.js"></script>
        <!-- isotope js -->
        <script src="<?= base_url() ?>assets/ppidv1/js/isotope.pkgd.min.js"></script>
        <!-- particles js -->
        <script src="<?= base_url() ?>assets/ppidv1/js/owl.carousel.min.js"></script>
        <script src="<?= base_url() ?>assets/ppidv1/js/jquery.nice-select.min.js"></script>
        <!-- swiper js -->
        <script src="<?= base_url() ?>assets/ppidv1/js/slick.min.js"></script>
        <script src="<?= base_url() ?>assets/ppidv1/js/jquery.counterup.min.js"></script>
        <script src="<?= base_url() ?>assets/ppidv1/js/waypoints.min.js"></script>
        <!-- custom js -->
        <script src="<?= base_url() ?>assets/ppidv1/js/custom.js"></script>
        <script>
        $(document).ready(function(){
        $('#tabel-data').DataTable();
        });
        </script>
    </body>
</html>