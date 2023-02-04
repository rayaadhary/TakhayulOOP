<div class="super_container">

    <!-- Course -->
    <div class="course">
        <div class="container">
            <div class="row">
                <!-- Panels -->
                <div class="col">
                    <div class="card mt-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <div class="form_title">Ubah Artikel</div>
                        </div>
                        <div class="card-body">
                            <form class="was-validated" action="<?= BASEURL ?>/post/ubah" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id" value="<?= $data['artikel']['id'] ?>">
                                <div class="form-group has-validation">
                                    <label for="judul" class="text-dark">Judul Artikel</label>
                                    <input type="text" name="judul" class="form-control" id="judul" value="<?= $data['artikel']['judul'] ?>" aria-describedby="judul" placeholder="isi dengan judul artikel" required>
                                </div>
                                <div class="form-group has-validation">
                                    <label for="artikel" class="text-dark">Artikel</label>
                                    <textarea class="form-control" name="deskripsi" id="artikel" placeholder="isi dengan artikel" rows="8" required><?= $data['artikel']['deskripsi'] ?></textarea>
                                    <div class="invalid-feedback">Mohon tuliskan artikel</div>
                                </div>
                                <div class="form-group has-validation">
                                    <label for="artikel" class="text-dark">Gambar</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img src="<?= BASEURL; ?>/images/<?= $data['artikel']['gambar']; ?>" class="img-thumbnail">
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="file" name="gambar" required>
                                                <div class="invalid-feedback">Mohon unggah gambar</div>
                                            </div>
                                        </div>
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