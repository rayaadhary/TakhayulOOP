<div class="super_container">
	<!-- Course -->

	<div class="container mt-3 mb-3">
		<div class="row justify-content-center">
			<!-- Register Form -->
			<div class="col-lg-12">
				<div class="register_form_container">
					<?php
					$db = new Database();
					$c = $db->__construct();
					if (empty($_POST['jawaban']) === false) {
						$html = '<ol class="text-dark">';
						$totalSkor = 0;
						foreach ($_POST['jawaban'] as $idPertanyaan => $idJawaban) {
							// Query pertanyaan
							$query = $c->prepare("select * from pertanyaan WHERE id = :id");
							$query->execute(array("id" => $idPertanyaan));
							$pertanyaan = $query->fetch();
							$html .= '<li>';
							$html .= htmlentities($pertanyaan['deskripsi']);
							// Query jawaban
							$query2 = $c->prepare("select * from jawaban where id = :id and id_pertanyaan = :id_pertanyaan");
							$query2->execute(array(
								'id' => $idJawaban,
								'id_pertanyaan' => $idPertanyaan
							));
							$jawaban = $query2->fetch();
							if (!$jawaban) {
								$html .= '<p style="color:red">Salah</p><br>';
							} else {
								$html .= '<p class="text-dark">Jawaban: ' . $jawaban['deskripsi'] . '</p>';
								if ($jawaban['jawaban'] == 1) {
									$html .= '<p style="color:green">Benar</p><br>';
									$totalSkor += $pertanyaan['skor'];
								} else {
									$html .= '<p style="color:red">Salah</p><br>';
								}
							}
							$html .= '</li>';
						}
						$html .= '</ol>';

						// Tampilkan Skor
						echo '<h3>Selamat Skor Anda: ' . $totalSkor . '</h3>';

						// Tampilan Detail Jawaban
						echo '<h3>Detail Hasil Anda</h3>';
						echo $html;
					}
					?>
					<a href="<?= BASEURL; ?>/kuis" class="btn text-white" style="background-color: #2e21df; font-weight: 400;">Coba Lagi</a>
				</div>
			</div>
		</div>
	</div>
</div>