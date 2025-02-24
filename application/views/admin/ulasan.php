<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bulma Admin | Free Admin Template By @nafplann</title>

    <meta charset="UTF-8">
    <meta name="description" content="Free Admin Dashboard Template Build with Bulma.io By nafplann">
    <meta name="keywords" content="Bulma,CSS,Admin,Template,Free,Download">
    <meta name="language" content="en-EN">
    <meta name="author" content="Abdul Manaf">
    <meta name="google-adsense-account" content="ca-pub-7864475889913507">

    <link href="https://fonts.googleapis.com/icon?family=Poppins" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/font-awesome-line-awesome/css/all.min.css"
        integrity="sha512-dC0G5HMA6hLr/E1TM623RN6qK+sL8sz5vB+Uc68J7cBon68bMfKcvbkg6OqlfGHo1nMmcCxO5AinnRTDhWbWsA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css"
        integrity="sha512-HqxHUkJM0SYcbvxUw5P60SzdOTy/QVwA1JJrvaXJv4q7lmbDZCmZaqz01UPOaQveoxfYRv1tHozWGPMcuTBuvQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo base_url('assets/bulma-admin/css/app.css'); ?>">
</head>

<body>
    <!-- START NAV -->
    <nav class="navbar columns is-fixed-top" role="navigation" aria-label="main navigation" id="app-header">
        <div class="navbar-brand column is-2 is-paddingless">
            <a class="navbar-item" href="index.html">
                BULMA ADMIN
            </a>
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="touchMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="touchMenu">
            <a class="navbar-item is-active" href="index.html">
                <span class="icon">
                    <i class="fa fa-home"></i>
                </span> Dashboard
            </a>
            <a class="navbar-item " href="forms.html">
                <span class="icon">
                    <i class="fa fa-edit"></i>
                </span> Kategori Buku
            </a>
            <a class="navbar-item " href="elements.html">
                <span class="icon">
                    <i class="fa fa-desktop"></i>
                </span> User
            </a>
            <a class="navbar-item " href="datatables.html">
                <span class="icon">
                    <i class="fa fa-table"></i>
                </span> Datatables
            </a>
        </div>

        <div id="navMenu" class="navbar-menu column is-hidden-touch">
            <div class="navbar-end">
                <div class="navbar-item dropdown is-right">
                    <div class="dropdown-trigger">
                        <a class="dropdown-trigger button is-white" aria-haspopup="true"
                            aria-controls="notification-dropdown">
                            <span class="icon">
                                <i class="fa fa-lg fa-bell"></i>
                            </span>
                        </a>
                    </div>
                    <div class="dropdown-menu" id="notification-dropdown" role="menu">
                        <div class="dropdown-content">
                            <div class="dropdown-item">
                                <p>You can insert <strong>any type of content</strong> within the dropdown menu.</p>
                            </div>
                            <hr class="dropdown-divider">
                            <div class="dropdown-item">
                                <p>You simply need to use a <code>&lt;div&gt;</code> instead.</p>
                            </div>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                This is a link
                            </a>
                        </div>
                    </div>
                </div>

                <div class="navbar-item">
                    <a class="button is-white app-logout" href="#">
                        <span class="icon">
                            <i class="fa fa-lg fa-power-off"></i>
                        </span>
                    </a>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        <figure class="image avatar is-32x32">
                            <img class="is-rounded" src="images/user1.png">
                        </figure>
                        &nbsp; Hi, nafplann
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item">
                            My Profile
                        </a>
                        <a class="navbar-item">
                            Settings
                        </a>
                        <hr class="navbar-divider">
                        <a href="<?= site_url('auth/logout') ?>" class="navbar-item app-logout">
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAV -->

    <div class="columns" id="app-content">
        <div class="column is-2 is-fullheight is-hidden-touch" id="sidebar">
            <aside class="menu">
                <p class="menu-label is-hidden-touch">
                    General
                </p>
                <ul class="menu-list">
                    <li>
                        <a class="is-active" href="<?= site_url('admin/home') ?>">
                            <span class="icon">
                                <i class="fa fa-home"></i>
                            </span> Dashboard
                        </a>
                    </li>
                    <li>
                        <a class="" href=" <?= site_url('admin/buku/kategori_buku') ?>">
                            <span class="icon">
                                <i class="fa fa-edit"></i>
                            </span> Kategori Buku
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?= site_url('admin/buku') ?>">
                            <span class="icon">
                                <i class="fa fa-desktop"></i>
                            </span> Buku
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?= site_url('admin/buku/pendataan_buku') ?>">
                            <span class="icon">
                                <i class="fa fa-table"></i>
                            </span> Pendataan Buku
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?= site_url('admin/buku/perizinan') ?>">
                            <span class="icon">
                                <i class="fa fa-lock"></i>
                            </span> Perizinan
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?= site_url('admin/ulasan') ?>">
                            <span class="icon">
                                <i class="fa fa-star"></i>
                            </span> Ulasan
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?= site_url('admin/user') ?>">
                            <span class="icon">
                                <i class="fa fa-table"></i>
                            </span> User
                        </a>
                    </li>

                </ul>

                <p class="menu-label is-hidden-touch">
                    Sample Pages
                </p>
                <ul class="menu-list">
                    <li>
                        <a class="" href="#">
                            <span class="icon">
                                <i class="fa fa-lock"></i>
                            </span> Login
                        </a>
                    </li>
                </ul>
            </aside>
        </div>

        <div class="column is-10" id="page-content">
            <div class="content-header">
                <h4 class="title is-4">Dashboard</h4>
                <span class="separator"></span>
                <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
                    <ul>
                        <li><a href="#">General</a></li>
                        <li class="is-active"><a href="#" aria-current="page">Dashboard</a></li>
                    </ul>
                </nav>
            </div>

            <div class="content-body">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>User</th>
                            <th>Buku</th>
                            <th>Ulasan</th>
                            <th>Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($ulasan as $pp) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $pp['id_user'] ?></td>
                                <td><?= $pp['id_buku'] ?></td>
                                <td><?= $pp['ulasan'] ?></td>
                                <td><?= $pp['rating'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

    <script src="<?php echo base_url('assets/bulma-admin/js/app.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"
        integrity="sha512-3PRVLmoBYuBDbCEojg5qdmd9UhkPiyoczSFYjnLhFb2KAFsWWEMlAPt0olX1Nv7zGhDfhGEVkXsu51a55nlYmw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.js"
        integrity="sha512-ZwR1/gSZM3ai6vCdI+LVF1zSq/5HznD3ZSTk7kajkaj4D292NLuduDCO1c/NT8Id+jE58KYLKT7hXnbtryGmMg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            let bar = {
                type: 'bar',
                height: 40,
                barWidth: 4,
                barColor: '#fff',
                barSpacing: 3
            };

            let line = {
                type: 'line',
                width: 150, //73
                height: 36,
                lineColor: '#fff',
                fillColor: 'rgba(0,0,0,0)',
                lineWidth: 2,
                maxSpotColor: 'rgba(255,255,255,0.4)',
                minSpotColor: 'rgba(255,255,255,0.4)',
                spotColor: 'rgba(255,255,255,0.4)',
                spotRadius: 3,
                highlightSpotColor: '#fff',
                highlightLineColor: 'rgba(255,255,255,0.4)'
            };
            // $(item).find('.sparkline-bar-stats').sparkline('html', chart === 'bar' ? bar : line);

            function data(length = 22) {
                return Array.from({
                    length
                }, () => Math.floor(Math.random() * 40));
            }

            $('.inlinesparkline-bar').each(function() {
                $(this).sparkline(data(), bar);
            });

            $('.inlinesparkline-line').each(function() {
                $(this).sparkline(data(), line);
            });
            var ctx1 = document.getElementById('chart2').getContext('2d');
            window.myBar = new Chart(ctx1, {
                type: 'bar',
                data: {
                    "labels": ["January", "February", "March", "April", "May", "June", "July"],
                    "datasets": [{
                        "label": "Dataset 1",
                        "backgroundColor": "rgb(255, 99, 132)",
                        "stack": "Stack 0",
                        "data": data(8)
                    }, {
                        "label": "Dataset 2",
                        "backgroundColor": "rgb(54, 162, 235)",
                        "stack": "Stack 0",
                        "data": data(8)
                    }, {
                        "label": "Dataset 3",
                        "backgroundColor": "rgb(75, 192, 192)",
                        "stack": "Stack 1",
                        "data": data(8)
                    }]
                },
                options: {
                    title: {
                        display: false,
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false
                    },
                    responsive: true,
                    scales: {
                        x: {
                            stacked: true,
                        },
                        y: {
                            stacked: true
                        }
                    },
                    legend: {
                        display: false
                    },
                }
            });

            var ctx2 = document.getElementById('chart1').getContext('2d');
            window.myLine = new Chart(ctx2, {
                type: 'line',
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
                    datasets: [{
                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: data(8),
                        label: 'Dataset',
                        fill: 'start'
                    }]
                },
                options: {
                    title: {
                        display: false
                    },
                    legend: {
                        display: false
                    },
                }
            });
        });
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4TVE6RNN41"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-4TVE6RNN41');
    </script>

    <script type=application/ld+json>
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "url": "https://www.nafplann.com/",
            "name": "Abdul Manaaf | Fullstack Web Developer",
            "author": "Abdul Manaaf",
            "image": "https://avatars3.githubusercontent.com/u/7114259?s=460&v=4",
            "description": "Abdul Manaaf is a Fullstack Web Developer from Indonesia",
            "sameAs": ["https://www.facebook.com/nafplann", "https://instagram.com/nafplann",
                "https://twitter.com/nafplann", "https://id.linkedin.com/in/nafplann", "https://github.com/nafplann"
            ]
        }
    </script>

    <script type=application/ld+json>
        {
            "@context": "http://schema.org",
            "@type": "Person",
            "email": "mailto:nafplann@gmail.com",
            "image": "https://avatars3.githubusercontent.com/u/7114259?s=460&v=4",
            "jobTitle": "Fullstack Web Developer",
            "name": "Abdul Manaaf",
            "url": "https://www.nafplann.com/",
            "sameAs": ["https://www.facebook.com/nafplann", "https://instagram.com/nafplann",
                "https://twitter.com/nafplann", "https://id.linkedin.com/in/nafplann", "https://github.com/nafplann"
            ]
        }
    </script>

    <script type=application/ld+json>
        {
            "@context": "http://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "item": {
                        "@id": "https://nafplann.com/",
                        "name": "Home",
                        "image": "https://avatars3.githubusercontent.com/u/7114259?s=460&v=4"
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "item": {
                        "@id": "https://nafplann.com/bulma-admin/",
                        "name": "free-bulma-admin-dashboard-template",
                        "image": "https://avatars3.githubusercontent.com/u/7114259?s=460&v=4"
                    }
                }
            ]
        }
    </script>
</body>

<!-- Mirrored from bulma-admin.test/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Feb 2024 10:20:26 GMT -->