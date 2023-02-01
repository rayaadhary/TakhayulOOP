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
				<div class="col-lg-4 course_col mb-4">
					<div class="course_image"><img src="<?= BASEURL; ?>/images/<?= $items['gambar']; ?>" alt=""></div>
					<div class="course_body">
						<div class="course_title"><a href="<?= BASEURL; ?>/post/detail/<?= $items['id']; ?>"><?= $items['judul']; ?></a></div>
					</div>
				</div>
			<?php
			}
			?>
		</div>
	</div>
</div>