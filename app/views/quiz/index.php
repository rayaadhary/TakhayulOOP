<!-- Courses -->
<div class="courses">
  <div class="container mb-5">
    <div class="row">
      <div class="col">
        <?php Flasher::flash(); ?>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="register_form_container">
          <div class="register_form_title h1 text-center">Quiz</div>
          <form action="<?= BASEURL; ?>/quiz/hasil" method="POST">
            <ol class="text-dark">
              <?php
              foreach ($data['pertanyaan'] as $items) {
              ?>
                <li>
                  <p class="text-dark"><?= $items['deskripsi']; ?></p>
                  <ul>
                    <?php
                    foreach ($data['jawaban'] as $jawaban) {
                    ?>
                      <?php
                      if ($jawaban['id_pertanyaan'] == $items['id']) {
                      ?>
                        <li>
                          <input type="radio" name="jawaban[<?= $items['id'] ?>]" value="<?= $jawaban['id']; ?>" required>
                          <label for=""><?= $jawaban['deskripsi']; ?></label>
                        </li>
                      <?php
                      }
                      ?>
                    <?php
                    }
                    ?>
                  </ul>
                <?php
              }
                ?>
                </li>
            </ol>
            <div class="text-center">
              <button type="submit" class="button">Kirim Jawaban</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>