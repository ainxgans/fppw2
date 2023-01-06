<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - RPS</title>

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
                    <h3 class="auth mb-5">Log in.</h3>
                    <?php if ($this->session->flashdata('message')) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= $this->session->flashdata('message') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('berhasil')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= $this->session->flashdata('berhasil') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <form action="<?= base_url('/auth') ?>" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="id" type="text" class="form-control form-control-xl" placeholder="ID" required />
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="password" type="password" class="form-control form-control-xl" placeholder="Password" required />
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" name="login">
                            Log in
                        </button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">
                            Belum punya akun ?
                            <a href="<?php echo base_url('/signup') ?>" class="font-bold">Daftar</a>.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right"></div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('/assets/') ?>js/app.js"></script>
    <script src="<?= base_url('/assets/') ?>js/bootstrap.js"></script>
</body>

</html>