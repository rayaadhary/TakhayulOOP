<div class="super_container">

	<!-- Courses -->
	<div class="courses">
		<div class="courses_background"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="section_title text-center">Artikel mengenai Takhayul</h2>
				</div>
			</div>
			<div class="text-start">
				<a href="<?= BASEURL ?>/post/tambah" class="btn btn-primary">Tambah Artikel</a>
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
						<!-- </div> -->
					</div>
				<?php
				}
				?>

			</div>
		</div>
	</div>