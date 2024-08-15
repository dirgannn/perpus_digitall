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
    /* General styles */
    .grid {
        display: grid;
        gap: 20px;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .button {
        padding: 10px 20px;
        text-decoration: none;
        color: white;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
    }

    .button--link {
        background: none;
        border: none;
        color: #007bff;
        text-decoration: underline;
    }

    .section {
        padding: 60px 0;
    }

    /* Book Detail Section */
    .book-detail {
        padding: 40px 0;
    }

    .book-detail__container {
        display: flex;
        gap: 20px;
    }

    .book-detail__navbar {
        flex: 1;
        border-right: 2px solid #ddd;
        padding-right: 20px;
    }

    .book-detail__nav {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .book-detail__nav li {
        margin-bottom: 10px;
    }

    .book-detail__nav a {
        text-decoration: none;
        color: #333;
        font-size: 1.1rem;
    }

    .book-detail__nav a:hover {
        color: #007bff;
    }

    .book-detail__content {
        flex: 3;
        display: flex;
        gap: 20px;
    }

    .book-detail__image img {
        width: 100%;
        height: auto;
        border-radius: 8px;
    }

    .book-detail__info {
        max-width: 500px;
    }

    .book-detail__title {
        font-size: 2rem;
        margin-bottom: 10px;
    }

    .book-detail__author,
    .book-detail__publisher,
    .book-detail__year {
        font-size: 1.2rem;
        margin: 5px 0;
    }

    .book-detail__description {
        font-size: 1rem;
        margin-top: 20px;
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

        <!-- application/views/buku/detail.php -->

        <section class="section book-detail" style="margin-top: 81px;">
            <div class="container book-detail__container">
                <div class="book-detail__navbar">
                    <div class="book-detail__content">
                        <div class="book-detail__image">
                            <img src="<?= base_url('assets/uploads/covers/' . $buku['cover']) ?>" alt="Book Cover"
                                style="width: 70%; height: auto;">
                        </div>
                        <div class="book-detail__info">
                            <h2 class="book-detail__title"><?= $buku['judul'] ?></h2>
                            <p class="book-detail__author"><strong>PENULIS :</strong> <?= $buku['penulis'] ?></p>
                            <p class="book-detail__publisher"><strong>PENERBIT :</strong> <?= $buku['penerbit'] ?></p>
                            <p class="book-detail__year"><strong>TAHUN TERBIT :</strong> <?= $buku['tahun_terbit'] ?>
                            </p>
                            <p class="book-detail__description"><?= $buku['sinopsis'] ?></p>
                            <br>
                            <?php if ($status_diterima && $status_diterima['status'] == 'approved') : ?>
                            <a class="button" style="background-color:green; color:white; margin-bottom:30px"
                                href="<?= base_url('perizinan/view_pdf/' . $buku['file']) ?>">
                                LIHAT BUKU
                            </a>
                            <?php else : ?>
                            <form action="<?= base_url('perizinan/izin_akses') ?>" method="post">
                                <input type="hidden" name="id_buku" value="<?= $buku['id_buku'] ?>">
                                <button class="button" style="background-color:red; margin-bottom:30px" type="submit">
                                    <span style="color:white;">AKSES BUKU <i class='bx bx-lock trick__icon'></i></span>
                                </button>
                            </form>
                            <?php endif; ?>

                            <!-- Menampilkan rata-rata rating -->
                            <?php if ($status_diterima && $status_diterima['status'] == 'approved') : ?>
                            <p class="book-detail__rating"><strong>Rata-rata Rating:</strong> <?= $rata_rata_rating ?>
                            </p>

                            <!-- Form untuk memberikan rating -->
                            <form action="<?= base_url('rating/beri_rating') ?>" method="post">
                                <input type="hidden" name="id_user" value="<?= $id_user ?>">
                                <input type="hidden" name="id_buku" value="<?= $buku['id_buku'] ?>">
                                <label for="rating"><strong>Berikan Rating:</strong></label>
                                <select name="rating" id="rating" required>
                                    <option value="">Pilih Rating</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <button class="button" style="background-color:blue; color:white;" type="submit">Submit
                                    Rating</button>
                            </form>
                            <?php else : ?>
                            <p>RATING : AKSES BUKU TERLEBIH DAHULU</p>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>



    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer__container container grid">
            <div>
                <h1 class="footer__title">Halloween</h1>
                <span class="footer__subtitle">Let’s have fun with Halloween!</span>
            </div>

            <ul class="footer__links">
                <li><a href="#" class="footer__link">About</a></li>
                <li><a href="#" class="footer__link">Products</a></li>
                <li><a href="#" class="footer__link">Discounts</a></li>
                <li><a href="#" class="footer__link">Contact</a></li>
            </ul>

            <div class="footer__socials">
                <a href="#" class="footer__social-link"><i class='bx bxl-facebook'></i></a>
                <a href="#" class="footer__social-link"><i class='bx bxl-twitter'></i></a>
                <a href="#" class="footer__social-link"><i class='bx bxl-instagram'></i></a>
            </div>
        </div>
    </footer>

    <!--=============== SWIPER JS ===============-->
    <script src="<?php echo base_url('assets/lanpage/assets/js/swiper-bundle.min.js') ?>"></script>

    <!--=============== MAIN JS ===============-->
    <script src="<?php echo base_url('assets/lanpage/assets/js/main.js') ?>"></script>
</body>

</html>