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
            <h3 class="">Selamat Skor Anda = <?= $total ?></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>