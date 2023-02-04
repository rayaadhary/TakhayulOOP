<!-- Login -->
<!-- <div class="register"> -->
<div class="container mt-3 mb-3">
    <div class="row justify-content-center">
        <!-- Register Form -->
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
            <div class="register_form_container">
                <div class="register_form_title text-center">Lupa Password?</div>
                <form method="POST" action="<?= BASEURL; ?>/login/passwordBaru" id="register_form" class="register_form">
                    <div class="row register_row">
                        <div class="col-lg-12 register_col">
                            <input type="text" id="username" name="usernameBaru" class="form_input" placeholder="Masukkan username" required="required" />
                        </div>
                        <div class="col-lg-12 register_col">
                            <input type="password" id="password" name="passwordBaru" class="form_input" placeholder="Password baru" required="required" />
                        </div>
                        <div class="col-lg-12 register_col">
                            <input type="password" id="ulangi_password" name="konfirmasiPassword" class="form_input" placeholder="Ulangi password" required="required" />
                        </div>
                        <button type="submit" name="login" class="form_button trans_200">Simpan</button>
                        <a href="<?= BASEURL ?>/Login" class="mt-3">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->