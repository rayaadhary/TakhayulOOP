<!-- Courses -->
<div class="courses">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php Flasher::flash(); ?>
			</div>
		</div>
		<?php if (isset($_SESSION['login'])) { ?>
			<div class="text-start">
				<a href="<?= BASEURL ?>/post/formTambah" class="btn text-white" style="background-color: #2e21df; font-weight: 400;">Tambah Artikel</a>
			</div>
		<?php } ?>
		<div class="row courses_row">
			<!-- Course -->
			<?php
			foreach ($data['artikel'] as $items) {
			?>
				<dpiv class="col-lg-4 course_col mb-3">
					<div class="course">
						<div class="course_image"><img src="<?= BASEURL; ?>/images/<?= $items['gambar']; ?>" alt=""></div>
						<div class="course_body">
							<div class="course_title"><a href="<?= BASEURL; ?>/post/detail/<?= $items['id']; ?>"><?= $items['judul']; ?></a></div>
						</div>
						<?php if (isset($_SESSION['login'])) {
						?>
							<div class="pl-4 mb-3">
								<a href="<?= BASEURL; ?>/post/formUbah/<?= $items['id']; ?>" title="Ubah"><i class="fa fa-edit fa-2x text-success" aria-hidden="true"></i></a>
								<a href="<?= BASEURL; ?>/post/hapus/<?= $items['id']; ?>" title="Hapus" class="delete-data"><i class="fa fa-trash fa-2x text-danger" aria-hidden="true"></i></a>
							</div>
						<?php
						} ?>
					</div>
				</dpiv>
			<?php
			}
			?>

		</div>
	</div>
</div>