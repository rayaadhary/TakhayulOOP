<div class="container mt-3 mb-3">
	<div class="row justify-content-center">
		<!-- Register Form -->
		<div class="col-lg-12">
			<div class="register_form_container">
				<div class="register_form_title h1 text-center">Quiz</div>
				<form action="<?= BASEURL; ?>/kuis/hasil" method="POST">
					<?php
					$db = new Database();
					$c = $db->__construct();
					try {
						$query = $c->prepare("SELECT * FROM pertanyaan ORDER BY rand() limit 50");
						$query->execute();
						echo '<ol class="text-dark">';
						while ($pertanyaan = $query->fetch()) {
							// while ($pertanyaan) {
							echo '<li>';
							echo htmlentities($pertanyaan['deskripsi']);
							$query2 = $c->prepare("SELECT * FROM jawaban WHERE id_pertanyaan = :id_pertanyaan ORDER BY rand()");
							$query2->execute(array("id_pertanyaan" => $pertanyaan['id']));
							echo '<ol type="A">';
							while ($jawaban = $query2->fetch()) {
								// while($jawaban) {
								echo '<li>';
								echo '<input type="radio" name="jawaban[' . $pertanyaan['id'] . ']" value="' . $jawaban['id'] . '"/> ';
								echo htmlentities($jawaban['deskripsi']);
								echo '</li>';
							}
							echo '</ol>';
							echo '</li>';
						}
						echo '</ol>';
					} catch (Exception $e) {
						echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Gagal</strong> menampilkan pertanyaan.
								<p>Error: ' . $e->getMessage() . '</p>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>';
						// echo "Gagal menampilkan pertanyaan. ";
						// echo "Error: " . $e->getMessage();
					}
					?>
					<button type="submit" class="button">Kirim Jawaban</button>
				</form>
			</div>
		</div>
	</div>
</div>