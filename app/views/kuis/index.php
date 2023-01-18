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
	<!-- Menu -->
	

	<!-- Course -->

	<div class="course">
		<div class="container">
			<div class="row row-lg">
        <form action="<?= BASEURL;?>/kuis/hasil" method="POST">
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
                  while($jawaban = $query2->fetch()) {
                  // while($jawaban) {
                      echo '<li>';
                      echo '<input type="radio" name="jawaban['.$pertanyaan['id'].']" value="'.$jawaban['id'].'"/> ';
                      echo htmlentities($jawaban['deskripsi']);
                      echo '</li>';
                  }
                  echo '</ol>';
                  echo '</li>';
              }
              echo '</ol>';
          } catch (Exception $e) {
              echo "Gagal menampilkan pertanyaan. ";
              echo "Error: ".$e->getMessage();
          }
          ?>
          <button type="submit">Kirim Jawaban</button>
          </form>
			</div>
			</div>
    </div>
