<div class="super_container">
	<!-- Course -->

	<div class="course">
		<div class="container">
			<div class="row row-lg">
				<form action="<?= BASEURL; ?>/kuis/hasil" method="POST">
					<?php
					$db = new Database();
					$c = $db->__construct();
					try {
						$query = $c->prepare("select * from pertanyaan order by rand() limit 50");
						$query->execute();
						echo '<ol>';
						while ($pertanyaan = $query->fetch()) {
							// while ($pertanyaan) {
							echo '<li>';
							echo htmlentities($pertanyaan['deskripsi']);
							$query2 = $c->prepare("select * from jawaban where id_pertanyaan = :id_pertanyaan order by rand()");
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
						echo "Gagal menampilkan pertanyaan. ";
						echo "Error: " . $e->getMessage();
					}
					?>
					<button type="submit">Kirim Jawaban</button>
				</form>
			</div>
		</div>
	</div>
</div>