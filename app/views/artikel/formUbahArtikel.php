<!-- Course -->
<div class="course">
    <div class="container">
        <div class="row">
            <!-- Panels -->
            <div class="col">
                <div class="card mt-4 mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <a href="javascript:void(0)" class="btn text-white" style="background-color: #2e21df; font-weight: 400;" onclick="window.history.back();"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
                        <div class="form_title">
                            <div class="ml-auto text-right">Ubah Artikel</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="was-validated" action="<?= BASEURL ?>/artikel/ubahArtikel" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="id" value="<?= $data['artikel']['id'] ?>">
                            <div class="form-group has-validation">
                                <label for="judul" class="text-dark">Judul Artikel</label>
                                <input type="text" name="judul" class="form-control" id="judul" value="<?= $data['artikel']['judul'] ?>" aria-describedby="judul" placeholder="isi dengan judul artikel">
                            </div>
                            <div class="form-group has-validation">
                                <label for="artikel" class="text-dark">Artikel</label>
                                <textarea class="form-control" name="deskripsi" id="artikel" placeholder="isi dengan artikel" rows="8"><?= $data['artikel']['deskripsi'] ?></textarea>
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
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambarInput" name="gambar" style="display: none;">
                                                <label class="btn text-white custom-file-label" style=" background-color: #2e21df; font-weight: 400;" for="gambarInput">Unggah Gambar</label>
                                            </div>
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
<script>
    $('.custom-file-input').on('change', function() {
        $(this).next('.custom-file-label').text($(this).val().split('\\').pop());
    });
</script>