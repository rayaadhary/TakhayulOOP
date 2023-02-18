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
    <?php if ($data['judul'] == 'Detail Artikel' || $data['judul'] == 'Tentang') {  ?>
        <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/styles/course.css">
        <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/styles/course_responsive.css">
        <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/styles/contact.css">
        <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/styles/contact_responsive.css">
    <?php } ?>
    <script src="https://cdn.tiny.cloud/1/0461z5w9ownxycci6d0pikmybskmenwzp0tmymfpngwfi4fv/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
</head>
<style>
    /* CUSTOM */
    .button {
        width: 20%;
        height: 30px;
        background: #2e21df;
        color: #ffffff;
        text-transform: uppercase;
        letter-spacing: 0.3em;
        font-family: "Montserrat", sans-serif;
        font-size: 12px;
        font-weight: 700;
        border: none;
        outline: none;
        cursor: pointer;
        border-radius: 3px;
        margin-top: 5px;
    }

    .button:hover {
        box-shadow: 0px 10px 40px rgba(0, 0, 0, 0.3);
    }

    .button:focus {
        outline: none;
    }

    p {
        color: black;
    }

    /* Preloader */
    .preloader {
        width: 100%;
        height: 100%;
        top: 0;
        position: fixed;
        z-index: 99999;
        background: #fff;
    }

    .lds-ripple {
        display: inline-block;
        width: 64px;
        height: 64px;
        position: absolute;
        top: calc(50% - 3.5px);
        left: calc(50% - 3.5px);
    }

    .lds-ripple .lds-pos {
        position: absolute;
        border: 2px solid #2e21df;
        opacity: 1;
        border-radius: 50%;
        animation: lds-ripple 1s cubic-bezier(0, 0.1, 0.5, 1) infinite;
    }

    .lds-ripple .lds-pos:nth-child(2) {
        animation-delay: -0.5s;
    }

    @keyframes lds-ripple {
        0% {
            top: 28px;
            left: 28px;
            width: 0;
            height: 0;
            opacity: 0;
        }

        5% {
            top: 28px;
            left: 28px;
            width: 0;
            height: 0;
            opacity: 1;
        }

        100% {
            top: -1px;
            left: -1px;
            width: 58px;
            height: 58px;
            opacity: 0;
        }
    }
</style>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div class="super_container">
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
                                    <li class="<?= ($data['judul'] == 'Home' || $data['judul'] == 'Tentang') ? 'active' : '' ?>">
                                        <a href="<?= BASEURL; ?>">Home</a>
                                    </li>
                                    <li class="<?= ($data['judul'] == 'Quiz' || $data['judul'] == 'Hasil Quiz') ? 'active' : '' ?>">
                                        <a href="<?= BASEURL; ?>/quiz">Quiz</a>
                                    </li>
                                    <li class="<?= ($data['judul'] == 'Artikel' || $data['judul'] == 'Detail Artikel' || $data['judul'] == 'Form Tambah Artikel' || $data['judul'] == 'Form Ubah Artikel') ? 'active' : '' ?>">
                                        <a href="<?= BASEURL; ?>/artikel">Artikel</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="ml-auto text-right">
                                <?php if (isset($_SESSION['login'])) { ?>
                                    <div class="nav-item dropdown">
                                        <a class="nav-link" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <!-- <img src="<?= BASEURL; ?>/images/instructor_1.jpg" alt="user" class="rounded-circle" width="40"> -->
                                            <span class="ml-2 d-none d-lg-inline-block text-dark"><span><?= isset($_SESSION['nama']) ? $_SESSION['nama'] : ''  ?> <i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-center user-dd animated">
                                            <a class="dropdown-item log-out" href="<?= BASEURL; ?>/User/logout">
                                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                                                Logout
                                            </a>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="user">
                                        <a href="<?= BASEURL; ?>/user"><i class="fa fa-user" aria-hidden="true"></i></a>
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