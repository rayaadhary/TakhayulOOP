<div class="super_container">

	<!-- Header -->

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
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>


	<!-- Courses -->

	<div class="courses">
		<div class="courses_background"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="section_title text-center">Artikel mengenai Takhayul</h2>
				</div>
			</div>
			<div class="row courses_row">

			
				<!-- Course -->
				<?php
				foreach ($data['artikel'] as $items) {
				?>
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="<?= BASEURL;?>/images/course_1.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_title"><a href="<?= BASEURL;?>/post/detail/<?= $items['id'];?>"><?= $items['judul'];?></a></div>
						</div>
					</div>
				</div>
				<?php
				}
				?>

			</div>
		</div>
	</div>
