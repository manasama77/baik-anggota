<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <p class="lead">
                            Tanggal Dropping
                            <?php
                            if ($nama_pembiayaan == 1) {
                                echo "Murabahah";
                            } elseif ($nama_pembiayaan == 2) {
                                echo "Saldo pembiayaan Wajib";
                            } elseif ($nama_pembiayaan == 3) {
                                echo "Saldo pembiayaan Sukarela";
                            } elseif ($nama_pembiayaan == 4) {
                                echo "Saldo pembiayaan Sukarela";
                            } elseif ($nama_pembiayaan == 5) {
                                echo "Saldo pembiayaan Sukarela";
                            }
                            ?>
                        </p>
                    </div>
                    <div class="col-6">
                        <p class="lead">01-01-2020</p>
                    </div>
                    <div class="col-6">
                        <p class="lead">Plafon</p>
                    </div>
                    <div class="col-6">
                        <p class="lead">Rp.999,999</p>
                    </div>
                    <div class="col-6">
                        <p class="lead">Margin</p>
                    </div>
                    <div class="col-6">
                        <p class="lead">Rp.99,999</p>
                    </div>
                    <div class="col-6">
                        <p class="lead">Jangka Waktu</p>
                    </div>
                    <div class="col-6">
                        <p class="lead">99 Minggu</p>
                    </div>
                    <div class="col-6">
                        <p class="lead">Angsuran</p>
                    </div>
                    <div class="col-6">
                        <p class="lead">Rp.9,999</p>
                    </div>
                    <div class="col-6">
                        <p class="lead">Saldo Pokok</p>
                    </div>
                    <div class="col-6">
                        <p class="lead">Rp.999,999</p>
                    </div>
                    <div class="col-6">
                        <p class="lead">Saldo Margin</p>
                    </div>
                    <div class="col-6">
                        <p class="lead">Rp.99,999</p>
                    </div>
                    <div class="col-6">
                        <p class="lead">Angsuran Ke ?</p>
                    </div>
                    <div class="col-6">
                        <p class="lead">99</p>
                    </div>
                    <div class="col-12">
                        <a href="<?= site_url(); ?>pembiayaan3/<?= $nama_pembiayaan; ?>" class="btn btn-primary btn-block btn-sm" role="button">Riwayat Transaksi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>