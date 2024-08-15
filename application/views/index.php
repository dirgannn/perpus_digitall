<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="<?php echo base_url('assets/lanpage/assets/css/swiper-bundle.min.css') ?>">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="<?php echo base_url('assets/lanpage/assets/css/styles.css') ?>">

    <title>Responsive Halloween Website</title>
    <style>
    .grid {
        display: grid;
        gap: 20px;
        /* Jarak antar item grid */
    }

    .trick__content {
        /* Sesuaikan ukuran item grid sesuai kebutuhan */
        padding: 20px;
        border-radius: 10px;
    }

    .trick__img {
        width: 100%;
        /* Mengisi lebar kontainer */
        height: auto;
        /* Mempertahankan rasio aspek gambar */
    }

    .trick__title {
        font-size: 1.5rem;
        /* Ukuran font judul */
    }

    .trick__subtitle {
        font-size: 1.2rem;
        /* Ukuran font subtitle */
    }

    .trick__price {
        font-size: 1.2rem;
        /* Ukuran font harga */
    }

    .button.trick__button {
        font-size: 1rem;
        /* Ukuran font tombol */
        padding: 10px 20px;
        /* Padding tombol */
    }

    @media (min-width: 768px) {
        .grid {
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        }
    }

    @media (max-width: 767px) {
        .grid {
            grid-template-columns: 1fr;
        }
    }

    .container {
        max-width: 1200px;
        /* Atur lebar maksimal kontainer sesuai kebutuhan */
        margin: 0 auto;
        /* Pusatkan kontainer */
        padding: 0 15px;
        /* Tambahkan padding di kiri dan kanan */
    }

    .trick__container.container.grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
        /* Jarak antar item grid */
    }

    .trick__content {
        padding: 20px;
        /* Warna latar belakang item grid */
    }

    .trick__img {
        width: 100%;
        /* Mengisi lebar kontainer */
        height: auto;
        /* Mempertahankan rasio aspek gambar */
    }

    .trick__title {
        font-size: 1.5rem;
        /* Ukuran font judul */
    }

    .trick__subtitle {
        font-size: 1.2rem;
        /* Ukuran font subtitle */
    }

    .trick__price {
        font-size: 1.2rem;
        /* Ukuran font harga */
    }

    .button.trick__button {
        font-size: 1rem;
        /* Ukuran font tombol */
        padding: 10px 20px;
        /* Padding tombol */
    }

    @media (min-width: 768px) {
        .trick__container.container.grid {
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        }
    }

    @media (max-width: 767px) {
        .trick__container.container.grid {
            grid-template-columns: 1fr;
        }
    }
    </style>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <img src="<?php echo base_url('assets/lanpage/assets/img/logo.png') ?>" alt="" class="nav__logo-img">
                Halloween
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>

                    <li class="nav__item">
                        <a href="#about" class="nav__link">About</a>
                    </li>

                    <li class="nav__item">
                        <a href="#trick" class="nav__link">Candy</a>
                    </li>

                    <li class="nav__item">
                        <a href="#new" class="nav__link">New</a>
                    </li>

                    <a href="#" class="button button--ghost">Support</a>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x'></i>
                </div>

                <img src="<?php echo base_url('assets/lanpage/assets/img/nav-img.png') ?>" alt="" class="nav__img">
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-grid-alt'></i>
            </div>

        </nav>
    </header>

    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home container" id="home">
            <div class="swiper home-swiper">
                <div class="swiper-wrapper">
                    <!-- HOME SLIDER 2 -->
                    <section class="swiper">
                        <div class="home__content grid">
                            <div class="home__group">
                                <img src="<?php echo base_url('assets/lanpage/') ?>assets/img/home2-img.png" alt=""
                                    class="home__img">
                                <div class="home__indicator"></div>

                                <div class="home__details-img">
                                    <h4 class="home__details-title">Adino & Grahami</h4>
                                    <span class="home__details-subtitle">No words can describe them</span>
                                </div>
                            </div>

                            <div class="home__data">
                                <h3 class="home__subtitle">#1 top perpustakaan</h3>
                                <h1 class="home__title">PERPUS <br> TAKAAN <br> DIGITAL</h1>
                                <p class="home__description">Adino steals cotton candy from his brother and eats them
                                    all in one bite,
                                    a hungry beast. Grahami can no longer contain his anger towards Adino.
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- HOME SLIDER 3 -->

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!--==================== CATEGORY ====================-->
        <section class="section category">
            <h2 class="section__title">Favorite Scare <br> Category</h2>

            <div class="category__container container grid">
                <div class="category__data">
                    <img src="<?php echo base_url('assets/lanpage/') ?>assets/img/category1-img.png" alt=""
                        class="category__img">
                    <h3 class="category__title">Ghosts</h3>
                    <p class="category__description">Choose the ghosts, the scariest there are.</p>
                </div>

                <div class="category__data">
                    <img src="<?php echo base_url('assets/lanpage/') ?>assets/img/category2-img.png" alt=""
                        class="category__img">
                    <h3 class="category__title">Pumpkins</h3>
                    <p class="category__description">You look at the scariest pumpkins there is.</p>
                </div>

                <div class="category__data">
                    <img src="<?php echo base_url('assets/lanpage/') ?>assets/img/category3-img.png" alt=""
                        class="category__img">
                    <h3 class="category__title">Witch Hat</h3>
                    <p class="category__description">Pick the most stylish witch hats out there.</p>
                </div>
            </div>
        </section>

        <!--==================== ABOUT ====================-->

        <!--==================== TRICK OR TREAT ====================-->
        <section class="section trick" id="trick">
            <h2 class="section__title">Trick Or Treat</h2>

            <div class="trick__container container grid">
                <?php foreach ($buku as $pp) { ?>
                <div class="trick__content">
                    <img src="<?= base_url('assets/uploads/covers/' . $pp['cover']) ?>" alt="" class="trick__img">
                    <h4 class="trick__title"><?= $pp['judul'] ?></h4>
                    <button class="button trick__button">
                        <a style="color:white;" href="<?= site_url('beranda/detail/' . $pp['id_buku']) ?>">DETAIL</a>
                    </button>
                </div>
                <?php } ?>
            </div>
        </section>

        <!--==================== DISCOUNT ====================-->
        <section class="section discount">
            <div class="discount__container container grid">
                <div class="discount__data">
                    <h2 class="discount__title">50% Discount <br> On New Products</h2>
                    <a href="#" class="button">Go to new</a>
                </div>

                <img src="<?php echo base_url('assets/lanpage/') ?>assets/img/discount-img.png" alt=""
                    class="discount__img">
            </div>
        </section>

        <!--==================== NEW ARRIVALS ====================-->
        <section class="section new" id="new">
            <h2 class="section__title">New Arrivals</h2>

            <div class="new__container container">
                <div class="swiper new-swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($buku as $pp) { ?>
                        <div class="new__content swiper">
                            <div class="new__tag">New</div>
                            <img src="<?= base_url('assets/uploads/covers/' . $pp['cover']) ?>" alt="" class="new__img">
                            <h3 class="new__title"><?= $pp['judul'] ?></h3>
                            <button class="button new__button">
                                <a href="<?= site_url('beranda/detail/' . $pp['id_buku']) ?>">DETAIL</a>
                            </button>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- Optional Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Optional Navigation -->
                </div>
            </div>

        </section>

        <!--==================== OUR NEWSLETTER ====================-->
        <section class="section newsletter">
            <div class="newsletter__container container">
                <h2 class="section__title">Our Newsletter</h2>
                <p class="newsletter__description">
                    Promotion new products and sales. Directly to your inbox
                </p>

                <form action="" class="newsletter__form">
                    <input type="text" placeholder="Enter your email" class="newsletter__input">
                    <button class="button">
                        Subscribe
                    </button>
                </form>
            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">
                    <img src="<?php echo base_url('assets/lanpage/') ?>assets/img/logo.png" alt=""
                        class="footer__logo-img">
                    Halloween
                </a>

                <p class="footer__description">Enjoy the scariest night <br> of your life.</p>

                <div class="footer__social">
                    <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                        <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                        <i class='bx bxl-instagram-alt'></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                        <i class='bx bxl-twitter'></i>
                    </a>
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">About</h3>

                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">About Us</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Features</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">News</a>
                    </li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Our Services</h3>

                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">Pricing</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Discounts</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Shipping mode</a>
                    </li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Our Company</h3>

                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">Blog</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">About us</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Our mision</a>
                    </li>
                </ul>
            </div>
        </div>

        <span class="footer__copy">&#169; Bedimcode. All rigths reserved</span>

        <img src="<?php echo base_url('assets/lanpage/') ?>assets/img/footer1-img.png" alt="" class="footer__img-one">
        <img src="<?php echo base_url('assets/lanpage/') ?>assets/img/footer2-img.png" alt="" class="footer__img-two">
    </footer>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-up-arrow-alt scrollup__icon'></i>
    </a>

    <!--=============== SCROLL REVEAL ===============-->
    <script src="<?php echo base_url('assets/lanpage/') ?>assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="<?php echo base_url('assets/lanpage/') ?>assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="<?php echo base_url('assets/lanpage/') ?>assets/js/main.js"></script>
</body>

</html>