<div class="super_container">
	<!-- Home -->
	<div class="home">
		<div class="home_background" style="background-image: url(images/index_background.jpg);"></div>
		<div class="home_content">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h1 class="home_title">Kuis Takhayul</h1>
						<div class="home_button trans_200"><a href="<?= BASEURL; ?>/kuis">mulai</a></div>
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
							<div class="course_image"><img src="<?= BASEURL; ?>/images/course_1.jpg" alt=""></div>
							<div class="course_body">
								<div class="course_title"><a href="<?= BASEURL; ?>/post/detail/<?= $items['id']; ?>"><?= $items['judul']; ?></a></div>
							</div>
						</div>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>