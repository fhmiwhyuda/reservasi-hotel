<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= base_url('assets/image/fav.png') ?>" type="image/png">
    <title>Hotel Hebat</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/linericon/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/owl-carousel/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/nice-select/css/nice-select.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/owl-carousel/owl.carousel.min.css') ?>">
    <!-- main css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>">
</head>

<body>
    <!--================ Header =================-->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="<?= base_url('Tamu/welcome') ?>"><img src="<?= base_url('assets/image/Brand.png') ?>" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="<?= base_url('Welcome/index') ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('Tamu/kamar') ?>">Kamar</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('Tamu/fasilitas') ?>">Fasilitas</a></li>
                        <?php if (empty($_SESSION['user'])) {
                            echo "<li class='nav-item'><a class='nav-link' href='" . base_url('Auth/login') . "'>Login</a></li>";
                        } else {
                            echo "<li class='nav-item'><a class='nav-link'>" . $_SESSION['user']->username . "</a></li>";
                        } ?>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--================ Header =================-->

    <!--================ Banner =================-->
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2 class="mb-3">Segarkan Pikiranmu</h2>
                    <a href="<?= base_url('Tamu/kamar')?>" class="btn theme_btn button_hover">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </section>
    <!--================ Banner =================-->

    <!--================ room  =================-->
    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Kamar kami</h2>
                <p>Kami menyediakan kamar-kamar yang mewah dengan harga yang terjangkau</p>
            </div>
            <div class="row mb_30">
                <?php foreach ($data as $key => $kamar) : ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="<?= base_url('assets/image/upload/' . $kamar['info_kamar']->img_room) ?>" alt="">
                                <a href="<?= base_url('Tamu/detailkamar' . '?id=' . $kamar['info_kamar']->id) ?>"><button class="btn theme_btn button_hover mt-2 rounded">Lihat</button></a></a>
                            </div><br>
                            <h6>
                                <ul>
                                    <?php if (!empty($kamar['fasilitas_kamar'])) : ?>
                                        <?php foreach ($kamar['fasilitas_kamar'] as $key2 => $f) : ?>
                                            <li>
                                                <?= $f->fasilitas; ?>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                            </h6>
                            <h4 class="sec_h4"><?= $kamar['info_kamar']->nama_room ?></h4>
                            <h5>Rp <?= $kamar['info_kamar']->price ?><small>/malam</small></h5>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <!--================ room  =================-->

    <!--================ Facilities =================-->
    <section class="facilities_area section_gap">
        <div class="container">
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restoran</h4>
                        <a href="<?= base_url('Tamu/fasilitas') ?>"><button class="btn theme_btn button_hover mt-2 rounded">Lihat</button></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Lapangan olahraga</h4>
                        <a href="<?= base_url('Tamu/fasilitas') ?>"><button class="btn theme_btn button_hover mt-2 rounded">Lihat</button></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Kolam renang</h4>
                        <a href="<?= base_url('Tamu/fasilitas') ?>"><button class="btn theme_btn button_hover mt-2 rounded">Lihat</button></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-car"></i>Penyewaan kendaraan</h4>
                        <a href="<?= base_url('Tamu/fasilitas') ?>"><button class="btn theme_btn button_hover mt-2 rounded">Lihat</button></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Gym</h4>
                        <a href="<?= base_url('Tamu/fasilitas') ?>"><button class="btn theme_btn button_hover mt-2 rounded">Lihat</button></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Cafe</h4>
                        <a href="<?= base_url('Tamu/fasilitas') ?>"><button class="btn theme_btn button_hover mt-2 rounded">Lihat</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Facilities =================-->

    <!--================ About =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <h2 class="title title_color">Hotel Hebat<br>Visi & Misi</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat minus temporibus itaque facilis reiciendis blanditiis quod recusandae nulla ullam magni. Magni placeat nulla velit alias dolorem quia, laudantium consectetur aspernatur?</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="<?= base_url('assets/image/about.jpg') ?>" alt="img">
                </div>
            </div>
        </div>
    </section>
    <!--================ About =================-->

    <!--================ footer =================-->
    <footer class="modal-footer">
        <div class="container">
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-sm-12 footer-text m-0">
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> M.fahmi wahyuda | UKK | <a href="">SMKN Pasirian</a>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--================ footer =================-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/owl-carousel/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.ajaxchimp.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/mail-script.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/nice-select/js/jquery.nice-select.js') ?>"></script>
    <script src="<?= base_url('assets/js/mail-script.js') ?>"></script>
    <script src="<?= base_url('assets/js/stellar.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/lightbox/simpleLightbox.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/custom.js') ?>"></script>
</body>

</html>