<div class="super_container">
    <!-- Login -->
    <div class="register">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Register Form -->
                <div class="col-lg-6">
                    <?php Flasher::flash(); ?>
                    <div class="register_form_container">
                        <div class="register_form_title text-center">Masuk ke halaman Administrator</div>
                        <form method="POST" action="<?= BASEURL; ?>/Login/login" id="register_form" class="register_form">
                            <div class="row register_row">
                                <div class="col-lg-6 register_col">
                                    <input type="text" id="username" name="username" class="form_input" placeholder="Username" required="required" />
                                </div>
                                <div class="col-lg-6 register_col">
                                    <input type="password" id="password" name="password" class="form_input" placeholder="Password" required="required" />
                                </div>
                                <button type="submit" name="login" class="form_button trans_200">Login</button>
                                <a href="<?= BASEURL; ?>/login/lupaPassword" class="mt-3">Lupa Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>