<div class="super_container">
	<!-- Course -->

	<div class="course">
		<div class="container">
			<div class="row row-lg">
				<?php
				$db = new Database();
				$c = $db->__construct();
				if (empty($_POST['jawaban']) === false) {
					$html = '<ol>';
					$totalSkor = 0;
					foreach ($_POST['jawaban'] as $idPertanyaan => $idJawaban) {
						// Query pertanyaan
						$query = $c->prepare("select * from pertanyaan where id = :id");
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
							$html .= '<p style="color:red">Salah</p>';
						} else {
							$html .= '<p>Jawaban: ' . $jawaban['deskripsi'] . '</p>';
							if ($jawaban['jawaban'] == 1) {
								$html .= '<p style="color:green">Benar</p>';
								$totalSkor += $pertanyaan['skor'];
							} else {
								$html .= '<p style="color:red">Salah</p>';
							}
						}
						$html .= '</li>';
					}
					$html .= '</ol>';

					// Tampilkan Skor
					echo '<h1>Selamat Skor Anda: ' . $totalSkor . '</h1>';

					// Tampilan Detail Jawaban
					echo '<h2>Detail Hasil Anda</h2>';
					echo $html;
				}
				?>
			</div>
		</div>
	</div>
</div>