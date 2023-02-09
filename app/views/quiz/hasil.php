<div class="super_container">
  <div class="container">
    <div class="row">
      <div class="col">
        <?php Flasher::flash(); ?>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="register_form_container">
          <div class="register_form_title h1 text-center">Hasil Quiz</div>
          <?php
          $total = 0;
          ?>
          <ol class="text-dark">
            <?php
            foreach ($data['id'] as $idPertanyaan => $idJawaban) {
              foreach ($data['pertanyaan'] as $pertanyaan) {
                if ($pertanyaan['id'] == $idPertanyaan) {
                  foreach ($data['jawaban'] as $jawaban) {
                    if ($jawaban['id'] == $idJawaban && $jawaban['id_pertanyaan'] == $idPertanyaan) {
            ?>
                      <li>
                        <?= $pertanyaan['deskripsi']; ?>
                        <p class="text-dark">
                          Jawaban : <?= $jawaban['deskripsi']; ?>
                          <?php
                          if ($jawaban['jawaban'] == 1) {
                            $total += $pertanyaan['skor'];
                          }
                          ?>
                        </p>
                      </li>
            <?php
                    }
                  }
                }
              }
            }
            ?>
          </ol>
          <div class="text-center">
            <?php
            if ($total >= 70) {
            ?>
              <h4 class='text-success'>Anda Cenderung Tidak Percaya Terhadap Takhayul</h4>
            <?php
            } else {
            ?>
              <h4 class='text-danger'>Anda Cenderung Percaya Terhadap Takhayul</h4>
            <?php
            }
            ?>
          </div>
          <a href="<?= BASEURL; ?>/quiz" class="btn text-white" style="background-color: #2e21df; font-weight: 400;">Coba Lagi</a>
        </div>
      </div>
    </div>
  </div>
</div>