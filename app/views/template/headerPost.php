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
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/styles/course.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/styles/course_responsive.css">
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
                                <li><a href="<?= BASEURL; ?>">Home</a></li>
                                <li class="active"><a href="<?= BASEURL; ?>/post">Artikel</a></li>
                                <li>
                                    <div class="user">
                                        <a href="<?= BASEURL; ?>/login"><i class="fa fa-user" aria-hidden="true"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>