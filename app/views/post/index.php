<?
	require_once '../app/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Course</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Lingua project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?= BASEURL;?>/styles/bootstrap4/bootstrap.min.css">
<link href="<?= BASEURL;?>/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?= BASEURL;?>/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?= BASEURL;?>/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?= BASEURL;?>/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?= BASEURL;?>/styles/course.css">
<link rel="stylesheet" type="text/css" href="<?= BASEURL;?>/styles/course_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<div class="top_bar_phone"><span class="top_bar_title">phone:</span>+44 300 303 0266</div>
								<div class="top_bar_right ml-auto">

									<!-- Language -->
									<div class="top_bar_lang">
										<span class="top_bar_title">site language:</span>
										<ul class="lang_list">
											<li class="hassubs">
												<a href="<?= BASEURL;?>/#">English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<ul>
													<li><a href="<?= BASEURL;?>/#">Ukrainian</a></li>
													<li><a href="<?= BASEURL;?>/#">Japanese</a></li>
													<li><a href="<?= BASEURL;?>/#">Lithuanian</a></li>
													<li><a href="<?= BASEURL;?>/#">Swedish</a></li>
													<li><a href="<?= BASEURL;?>/#">Italian</a></li>
												</ul>
											</li>
										</ul>
									</div>

									<!-- Social -->
									<div class="top_bar_social">
										<span class="top_bar_title social_title">follow us</span>
										<ul>
											<li><a href="<?= BASEURL;?>/#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="<?= BASEURL;?>/#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="<?= BASEURL;?>/#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container mr-auto">
								<a href="<?= BASEURL;?>/#">
									<div class="logo_text">Lingua</div>
								</a>
							</div>
							<nav class="main_nav_contaner">
								<ul class="main_nav">
									<li><a href="<?= BASEURL;?>/index.html">Home</a></li>
									<li class="active"><a href="<?= BASEURL;?>/courses.html">Courses</a></li>
									<li><a href="<?= BASEURL;?>/instructors.html">Instructors</a></li>
									<li><a href="<?= BASEURL;?>/#">Events</a></li>
									<li><a href="<?= BASEURL;?>/blog.html">Blog</a></li>
									<li><a href="<?= BASEURL;?>/contact.html">Contact</a></li>
								</ul>
							</nav>
							<div class="header_content_right ml-auto text-right">
								<div class="header_search">
									<div class="search_form_container">
										<form action="#" id="search_form" class="search_form trans_400">
											<input type="search" class="header_search_input trans_400" placeholder="Type for Search" required="required">
											<div class="search_button">
												<i class="fa fa-search" aria-hidden="true"></i>
											</div>
										</form>
									</div>
								</div>

								<!-- Hamburger -->

								<div class="user"><a href="<?= BASEURL;?>/#"><i class="fa fa-user" aria-hidden="true"></i></a></div>
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="<?= BASEURL;?>/index.html">Home</a></li>
				<li class="menu_mm"><a href="<?= BASEURL;?>/courses.html">Courses</a></li>
				<li class="menu_mm"><a href="<?= BASEURL;?>/instructors.html">Instructors</a></li>
				<li class="menu_mm"><a href="<?= BASEURL;?>/#">Events</a></li>
				<li class="menu_mm"><a href="<?= BASEURL;?>/blog.html">Blog</a></li>
				<li class="menu_mm"><a href="<?= BASEURL;?>/contact.html">Contact</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_phone"><span class="menu_title">phone:</span>+44 300 303 0266</div>
			<div class="menu_social">
				<span class="menu_title">follow us</span>
				<ul>
					<li><a href="<?= BASEURL;?>/#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="<?= BASEURL;?>/#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="<?= BASEURL;?>/#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- Intro -->

	<div class="intro">
		<div class="intro_background parallax-window" data-parallax="scroll" data-image-src="http://localhost/quiz/public/images/intro.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="intro_container d-flex flex-column align-items-start justify-content-end">
						<div class="intro_content">
							<div class="intro_title"><?= $data['artikel'][0]['judul']?></div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Course -->

	<div class="course">
		<div class="container">
			<div class="row row-lg">

				<!-- Panels -->
				<div class="col">

							<div class="panel_text">	
								<p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula, aliquam neque euismod, porttitor ex. Nam consequat iaculis maximus. Suspendisse potenti. In rutrum justo et diam egestas luctus. Mauris eu neque eget odio suscipit eleifend. Sed imperdiet ante quis felis tempor hendrerit. Curabitur eget fermentum ipsum. Sed efficitur eget velit eu vulputate. Duis tincidunt quam in erat dignissim consequat. Praesent tempus leo eu nisl fringilla interdum. Maecenas rutrum libero eget lacus bibendum tristique. Curabitur at felis lobortis, mollis ante ut, tempus elit. Morbi justo nisi, posuere sed augue id, iaculis tincidunt mi. Pellentesque sed dolor sed dui congue tempus a et felis.</p> 

								<?php
									// var_dump($data['artikel']);
										foreach ($data['artikel'] as $item) {
											?><ul>
												<li><?= $item['judul'];?></li>
												<li><?= $item['deskripsi'];?></li>
												</ul><?php
										}
									?>
							</div>
						</div>


			</div>
			</div>
			</div>
			</div>
	</div>
