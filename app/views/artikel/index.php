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
				<a href="<?= BASEURL ?>/artikel/formTambahArtikel" class="btn text-white" style="background-color: #2e21df; font-weight: 400;"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Artikel</a>
			</div>

		<?php } ?>
		<div class="row courses_row">
			<!-- Course -->
			<?php
			foreach ($data['artikel'] as $items) {
			?>
				<div class="col-lg-4 course_col mb-3">
					<div class="course">
						<div class="course_image"><img src="<?= BASEURL; ?>/images/<?= $items['gambar']; ?>" alt=""></div>
						<div class="course_body">
							<div class="course_title"><a href="<?= BASEURL; ?>/artikel/detailArtikel/<?= $items['id']; ?>"><?= $items['judul']; ?></a></div>
						</div>
						<?php if (isset($_SESSION['login'])) {
						?>
							<div class="pl-4 mb-3">
								<a href="<?= BASEURL; ?>/artikel/formUbahArtikel/<?= $items['id']; ?>" title="Ubah"><i class="fa fa-edit fa-2x text-success" aria-hidden="true"></i></a>
								<a href="<?= BASEURL; ?>/artikel/hapusArtikel/<?= $items['id']; ?>" title="Hapus" class="delete-data"><i class="fa fa-trash fa-2x text-danger" aria-hidden="true"></i></a>
							</div>
						<?php
						} ?>
					</div>
				</div>
			<?php
			}
			?>
		</div>
		<nav aria-label="...">
			<ul class="pagination justify-content-center">
				<?php
				for ($i = 1; $i <= $data['pages']; $i++) { ?>
					<li class="page-item <?php if ($data['currentPage'] == $i) echo "active" ?>" aria-current="page">
						<a class="page-link" href="<?= BASEURL ?>/artikel/<?= $i; ?>"><?php echo $i; ?></a>
					</li>
				<?php } ?>
			</ul>
		</nav>
	</div>
</div>