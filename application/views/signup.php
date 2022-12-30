<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register - RPS</title>
    <link rel="stylesheet" href="<?php echo base_url('/assets/') ?>css/main/app.css" />
    <link rel="stylesheet" href="<?php echo base_url('/assets/') ?>/css/main/app-dark.css" />
    <link rel="stylesheet" href="<?php echo base_url('/assets/') ?>/css/pages/auth.css" />
    <link rel="shortcut icon" href="<?php echo base_url('/assets/') ?>/images/logo/favicon.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo base_url('/assets/') ?>   /images/logo/favicon.png" type="image/png" />

    <link rel="stylesheet" href="assets/css/shared/iconly.css" />
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.html" class="auth-title">RPS</a>
                    </div>
                    <h3 class="auth mb-5">Sign Up<h3>
                            <?php if (validation_errors()) : ?>
                                <div class="alert alert-primary">
                                    <?= validation_errors() ?>
                                </div>
                            <?php endif ?>

                            <form action="" method="post">
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <input type="text" class="form-control form-control-xl" placeholder="NIK/NIM" name="id" />
                                    <div class="form-control-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <input type="text" class="form-control form-control-xl" placeholder="Email" name="email" />
                                    <div class="form-control-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <input type="text" class="form-control form-control-xl" placeholder="Nama Lengkap" name="nama" />
                                    <div class="form-control-icon">
                                        <i class="bi bi-person"></i>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <input type="password" class="form-control form-control-xl" placeholder="Password" name="password" />
                                    <div class="form-control-icon">
                                        <i class="bi bi-shield-lock"></i>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
                                    Sign Up
                                </button>
                            </form>
                            <div class="text-center mt-5 text-lg fs-4">
                                <p class="text-gray-600">
                                    Sudah punya akun ?
                                    <a href="<?= base_url('/login') ?>" class="font-bold">Log in</a>.
                                </p>
                            </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right"></div>
            </div>
        </div>
    </div>
</body>

</html>