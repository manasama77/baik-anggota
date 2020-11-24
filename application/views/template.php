<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title; ?> | APP BAIK</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />

    <link rel="stylesheet" href="<?= base_url(); ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>vendor/fortawesome/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>vendor/components/jqueryui/themes/base/all.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/dashboard.css" />
    <link rel="icon" href="<?= base_url(); ?>favicon.ico">
</head>

<body id="bg">
    <main class="container-fluid" style="margin-bottom: 50px;">
        <div class="row mb-2">
            <div class="col-12 text-center">
                <a href="<?= site_url(); ?>dashboard">
                    <img src="<?= site_url(); ?>public/img/baik_logo1.png" alt="LOGO" />
                </a>
                <h3 class="display-5">APP BAIK</h3>
                <hr />
            </div>
        </div>
        <div class="row mb-0">
            <div class="col-12">
                <div class="media usercard bg-dark pl-2 pr-2 pt-2 pb-1">
                    <img class="mr-4 rounded-circle pp align-self-center" src="<?= site_url(); ?>public/img/default_pp.png" alt="PP" />
                    <div class="media-body">
                        <h5 class="mt-0">
                            <?= $this->session->userdata('nama'); ?> (<?= $this->session->userdata('panggilan'); ?>)<br />
                            <small>
                                <?= $this->session->userdata('cif_no'); ?><br />
                                Majlis <?= $this->session->userdata('majelis'); ?>
                            </small>
                        </h5>
                    </div>
                    <div class="float-right align-self-center">
                        <a href="<?= site_url('edit_info'); ?>" class="btn btn-primary btn-sm mr-2" role="button" title="Edit Password">
                            <i class="fa fa-pencil-alt fa-2x"></i>
                        </a>
                        <a href="<?= site_url('logout'); ?>" class="btn btn-warning btn-sm mr-2" role="button" title="Logout">
                            <i class="fa fa-sign-out-alt fa-2x"></i>
                        </a>
                    </div>
                </div>
                <hr />
            </div>
        </div>
        <?php
        $this->load->view($content);
        ?>
    </main>

    <?php
    if ($footer == 1) {
    ?>
        <footer class="footer fixed-bottom navigasi d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a href="<?= site_url('dashboard'); ?>">
                            <i class="fa fa-home fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    <?php
    } elseif ($footer == 2) {
    ?>
        <footer class="footer fixed-bottom navigasi d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a href="<?= site_url('dashboard'); ?>">
                            <i class="fa fa-home fa-2x"></i>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= site_url(); ?><?= $footer_link; ?>">
                            <i class="fa fa-caret-left fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    <?php
    }
    ?>

    <script src="<?= base_url(); ?>vendor/components/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>vendor/components/jqueryui/jquery-ui.min.js"></script>
    <script src="<?= base_url(); ?>vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>public/js/jquery.blockUI.min.js"></script>
    <script src="<?= base_url(); ?>public/js/sweetalert2.all.min.js"></script>
</body>

</html>

<?php
$this->load->view($vitamin);
?>