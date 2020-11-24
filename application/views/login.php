<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Anggota Login | APP BAIK</title>
    <link href="<?= base_url(); ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <link href="<?= base_url(); ?>public/css/login.css" rel="stylesheet" id="login-css" />
    <link rel="icon" href="favicon.ico">
</head>

<body>
    <div class="sidenav">
        <div class="login-main-text">
            <h2>APP BAIK ANGGOTA<br />Login Page</h2>
            <p>Aplikasi Untuk Anggota KSPSS Baytul Ikhtiar.</p>
        </div>
    </div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <form id="form_login">
                    <div class="form-group">
                        <label for="cif_no"><b>No Anggota</b></label>
                        <input type="text" class="form-control" placeholder="Masukan No Anggota" id="cif_no" name="cif_no" pattern="[0-9]*" inputmode="numeric" required />
                    </div>
                    <button type="submit" class="btn btn-black btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="<?= base_url(); ?>vendor/components/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>public/js/jquery.blockUI.min.js"></script>
    <script src="<?= base_url(); ?>public/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>public/js/jquery.validate.min.js"></script>
    <script src="<?= base_url(); ?>public/js/additional-methods.min.js"></script>
</body>

</html>