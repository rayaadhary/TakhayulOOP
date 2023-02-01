<div class="super_container">

  <!-- Course -->
  <div class="course">
    <div class="container">
      <div class="row">
        <!-- Panels -->
        <div class="col">
          <div class="card mt-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <div class="form_title">Tambah Artikel</div>
            </div>
            <div class="card-body">
              <form class="was-validated" action="<?= BASEURL ?>/post/tambah" method="post" enctype="multipart/form-data">
                <div class="form-group has-validation">
                  <label for="judul" class="text-dark">Judul Artikel</label>
                  <input type="text" name="judul" class="form-control" id="judul" aria-describedby="judul" placeholder="isi dengan judul artikel" required>
                  <div class="invalid-feedback">
                    Mohon tuliskan judul
                  </div>
                </div>
                <div class="form-group has-validation">
                  <label for="artikel" class="text-dark">Artikel</label>
                  <textarea class="form-control" name="deskripsi" id="artikel" placeholder="isi dengan artikel" rows="8" required></textarea>
                  <div class="invalid-feedback">
                    Mohon tuliskan artikel
                  </div>
                </div>
                <div class="form-group has-validation">
                  <input type="file" name="gambar" id="" required>
                  <div class="invalid-feedback">
                    Mohon unggah gambar
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="form_button trans_200">Kirim Artikel</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>