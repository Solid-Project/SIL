<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/apple-icon.png') ?>">
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon.png') ?>">
    <title>
        SIL Login Page
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url('/public/assets/css/nucleo-icons.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('/public/assets/css/nucleo-svg.css') ?>" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= base_url('/public/assets/css/nucleo-svg.css') ?>" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url('/public/assets/css/soft-ui-dashboard.css') ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('public/assets/sweetalert2/dist/sweetalert2.min.css') ?>">

    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
</head>

<body class="">
    <div class="container position-sticky z-index-sticky top-0">

    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-bolder text-info text-gradient">Welcome To SIL </h3>
                                    <p class="mb-0">Silahkan Masukan Email dan Password Anda</p>
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url() ?>auth/secure" method="post">
                                        <label>Username</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="username-addon" name="username">
                                        </div>
                                        <label>Password</label>
                                        <div class="mb-3">
                                            <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="password">
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('<?= base_url('/public/assets/img/curved7.jpg') ?>')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="<?= base_url('public/assets/sweetalert2/dist/sweetalert2.min.js') ?>"></script>

    <script>
        <?php if ($this->session->flashdata('success')) : ?>
            // Notifikasi success
            Swal.fire({
                title: 'Success!',
                text: '<?= $this->session->flashdata('success') ?>',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        <?php elseif ($this->session->flashdata('error')) : ?>
            // Notifikasi error
            Swal.fire({
                title: 'Error!',
                text: '<?= $this->session->flashdata('error') ?>',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        <?php endif; ?>
    </script>
    <!-- -- -- -- --START FOOTER 3 w / COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT-- -- -- - -- >
    < footer class="footer py-5">
        < div class="container">

            < div class="row">
                < div class="col-8 mx-auto text-center mt-1">
                    < p class="mb-0 text-secondary">
                        Copyright© < script>
                            document.write(new Date().getFullYear())
                        </> Sistem Informasi Laboratiorum
                        </p>
                        </div>
                        </div>
                        </div>
                        </footer>
                        <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <!--   Core JS Files   -->
    <script src="<?= base_url('/public/assets/js/core/popper.min.js') ?>"></script>
    <script src="<?= base_url('/public/assets/js/core/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('/public/assets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('/public/assets/js/plugins/smooth-scrollbar.min.js') ?>"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url('/public/assets/js/soft-ui-dashboard.min.js?v=1.0.7') ?>"></script>
</body>

</html>