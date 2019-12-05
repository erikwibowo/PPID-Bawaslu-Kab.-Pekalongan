<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="<?= site_url() ?>"> <img src="<?= base_url() ?>assets/ppidv1/img/luwakode/logo.png" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse main-menu-item justify-content-end"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?= site_url() ?>">Beranda</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle <?= @$profil_ppid ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Profil PPID
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php foreach ($this->Mhalaman->readByKategori(7)->result() as $key): ?>
                                    <a class="dropdown-item" href="<?= site_url('ppid/halaman/'.$key->slug_halaman) ?>"><?= $key->judul_halaman ?></a>
                                    <?php endforeach ?>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Informasi Publik
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php foreach ($this->Mkategori_informasi->read()->result() as $key): ?>
                                    <a class="dropdown-item " href="<?= site_url('ppid/informasi/'.$key->slug_kategori_informasi) ?>"><?= $key->kategori_informasi ?></a>
                                    <?php endforeach ?>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Layanan Informasi
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php foreach ($this->Mhalaman->readByKategori(9)->result() as $key): ?>
                                    <a class="dropdown-item" href="<?= site_url('ppid/halaman/'.$key->slug_halaman) ?>"><?= $key->judul_halaman ?></a>
                                    <?php endforeach ?>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= site_url('ppid/halaman/kontak') ?>">Kontak</a>
                            </li>
                            <!-- <li class="d-none d-lg-block">
                                <a class="btn_1" href="#">Get a Quote</a>
                            </li> -->
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>