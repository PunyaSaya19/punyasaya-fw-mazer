<?php
require_once('init.php');
helper(['flasher'], 'app/helper/');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= assets('template/css/main/app.css') ?>">
    <link rel="stylesheet" href="<?= assets('template/css/pages/auth.css') ?>">
    <link rel="shortcut icon" href="<?= assets('template/images/logo/favicon.svg') ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?= assets('template/images/logo/favicon.png') ?>" type="image/png">
    <link rel="stylesheet" href="<?= assets('plugins/sweetalert/sweetalert2.min.css'); ?>">
    <link rel="stylesheet" href="<?= assets('plugins/DataTables/datatables.min.css'); ?>">

    <link rel="stylesheet" href="<?= assets('template/css/shared/iconly.css') ?>">
    <?= showFlasher() ?>

</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-md-3"></div>
            <div class="col-md-6 col-sm-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href=""><img src="<?= assets('template/images/logo/logo.svg') ?>" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>

                    <form action="" method="POST">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username">
                            <div class="form-control-icon">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="fas fa-key"></i>
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Don't have an account?
                            <a href="<?= base_url() ?>/register.php" class="font-bold">
                                Sign up
                            </a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="<?= assets('template/js/bootstrap.js') ?>"></script>
    <script src="<?= assets('template/js/app.js') ?>"></script>
    <script src="<?= assets('plugins/sweetalert/sweetalert2.min.js'); ?>"></script>

    <!-- Need: Apexcharts -->
    <script src="<?= assets('js/flasher.js'); ?>"></script>
</body>

</html>