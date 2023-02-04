<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $data['judul']; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Lingua project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/styles/bootstrap4/bootstrap.min.css">
    <link href="<?= BASEURL; ?>/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/styles/responsive.css">
    <?php if ($data['judul'] == 'Detail Artikel') {  ?>
        <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/styles/course.css">
        <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/styles/course_responsive.css">
        <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/styles/contact.css">
        <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/styles/contact_responsive.css">
    <?php } ?>
</head>

<body>
    <!-- Header -->
    <!-- Header Content -->
    <div class="header_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container mr-auto">
                            <a href="<?= BASEURL; ?>">
                                <div class="logo_text">Takhayul</div>
                            </a>
                        </div>
                        <nav class="main_nav_contaner">
                            <ul class="main_nav">
                                <li class="<?= ($data['judul'] == 'Home') ? 'active' : '' ?>">
                                    <a href="<?= BASEURL; ?>">Home</a>
                                </li>
                                <li class="<?= ($data['judul'] == 'Artikel' || $data['judul'] == 'Detail Artikel') ? 'active' : '' ?>">
                                    <a href="<?= BASEURL; ?>/post">Artikel</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="ml-auto text-right">
                            <!-- <div class="header_search">
                                <div class="search_form_container">
                                    <form action="#" id="search_form" class="search_form trans_400">
                                        <input type="search" class="header_search_input trans_400" placeholder="Type for Search" required="required">
                                        <div class="search_button">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                            <?php if (isset($_SESSION['login'])) { ?>
                                <div class="nav-item dropdown">
                                    <a class="nav-link" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <!-- <img src="<?= BASEURL; ?>/images/instructor_1.jpg" alt="user" class="rounded-circle" width="40"> -->
                                        <span class="ml-2 d-none d-lg-inline-block text-dark"><span><?= isset($_SESSION['nama']) ? $_SESSION['nama'] : ''  ?> <i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-center user-dd animated">
                                        <a class="dropdown-item log-out" href="<?= BASEURL; ?>/Login/logout">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                                            Logout
                                        </a>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="user">
                                    <a href="<?= BASEURL; ?>/login"><i class="fa fa-user" aria-hidden="true"></i></a>
                                </div>
                            <?php } ?>

                            <div class="hamburger menu_mm">
                                <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>