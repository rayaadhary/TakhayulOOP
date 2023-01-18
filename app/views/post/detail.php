<div class="super_container">

	<!-- Header -->
<!-- Header Content -->
		
		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container mr-auto">
								<a href="#">
									<div class="logo_text">Takhayul</div>
								</a>
							</div>
							<nav class="main_nav_contaner">
								<ul class="main_nav">
									<li><a href="<?= BASEURL;?>">Home</a></li>
									<li class="active"><a href="<?= BASEURL;?>/post">Artikel</a></li>
								</ul>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- Menu -->

	
	<!-- Intro -->

	<div class="intro">
		<div class="intro_background parallax-window" data-parallax="scroll" data-image-src="http://localhost/quiz/public/images/intro.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="intro_container d-flex flex-column align-items-start justify-content-end">
						<div class="intro_content">
							<div class="intro_title"><?= $data['artikel']['judul']?></div>
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
								<p class="text-dark"><?= $data['artikel']['deskripsi']?></p> 
							</div>
						</div>


			</div>
			</div>
			</div>
			</div>
	</div>
