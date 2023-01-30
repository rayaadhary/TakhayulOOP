<div class="super_container">

  <!-- Header -->
  <!-- Header Content -->

  <!-- Header Content -->
  <div class="header_container">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="header_content d-flex flex-row align-items-center justify-content-start">
            <div class="logo_container mr-auto">
              <a href="<?= BASEURL; ?>">
                <div class="logo_text">Takhayul</div>
              </a>
            </div>
            <nav class="main_nav_contaner">
              <ul class="main_nav">
                <li><a href="<?= BASEURL; ?>">Home</a></li>
                <li class="active"><a href="<?= BASEURL; ?>/post">Artikel</a></li>
              </ul>
            </nav>

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

        <!-- Panels -->
        <div class="col">

          <div class="card mt-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Artikel</h6>
            </div>
            <div class="card-body">
              <form action="<?= BASEURL ?>/post/tambah" method="post">
                <div class=" form-group">
                  <label for="judul">Judul Artikel</label>
                  <input type="text" name="judul" class="form-control" id="judul" aria-describedby="judul" placeholder="isi dengan judul artikel">
                </div>
                <div class="form-group">
                  <label for="artikel">Artikel</label>
                  <textarea class="form-control" name="deskripsi" id="artikel" placeholder="isi dengan artikel" rows="8"></textarea>
                </div>
                <div class="form-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
              </form>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>
</div>