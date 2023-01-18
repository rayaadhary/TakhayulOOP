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
                $html .= '<p>Jawaban: '. $jawaban['deskripsi'].'</p>';
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
        echo '<h1>Selamat Skor Anda: '.$totalSkor.'</h1>';
    
        // Tampilan Detail Jawaban
        echo '<h2>Detail Hasil Anda</h2>';
        echo $html;
    }
    ?>
			</div>
			</div>
    </div>
