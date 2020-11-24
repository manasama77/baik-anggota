<div class="row">
    <div class="col-12">
        <p class="lead">
            <strong>
                <?php
                if ($nama_tabungan == 1) {
                    echo "TASYA";
                } elseif ($nama_tabungan == 2) {
                    echo "TRENDIS";
                } elseif ($nama_tabungan == 3) {
                    echo "TAKUR";
                } elseif ($nama_tabungan == 4) {
                    echo "TABUMIL";
                } elseif ($nama_tabungan == 5) {
                    echo "TANIS";
                }
                ?>
            </strong>
            <small>
                (
                <?php
                if ($nama_tabungan == 1) {
                    echo "Tabungan Syawal";
                } elseif ($nama_tabungan == 2) {
                    echo "Tabungan Pendidikan Syariah";
                } elseif ($nama_tabungan == 3) {
                    echo "Tabungan Kurban";
                } elseif ($nama_tabungan == 4) {
                    echo "Tabungan Ibu Hamil";
                } elseif ($nama_tabungan == 5) {
                    echo "Tabungan Antisipasi Syawal";
                }
                ?>
                )
                <br />
                1234567890
            </small>
        </p>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <p class="text-kecil">Tanggal Buka</p>
                    </div>
                    <div class="col-6">
                        <p class="text-kecil">01-01-2020</p>
                    </div>
                    <div class="col-6">
                        <p class="text-kecil">Jangka Waktu</p>
                    </div>
                    <div class="col-6">
                        <p class="text-kecil">99 Minggu</p>
                    </div>
                    <div class="col-6">
                        <p class="text-kecil">Angsuran</p>
                    </div>
                    <div class="col-6">
                        <p class="text-kecil">Rp.9,999</p>
                    </div>
                    <div class="col-6">
                        <p class="text-kecil">Saldo</p>
                    </div>
                    <div class="col-6">
                        <p class="text-kecil">Rp.999,999</p>
                    </div>
                    <div class="col-6">
                        <p class="text-kecil">Angsuran Ke ?</p>
                    </div>
                    <div class="col-6">
                        <p class="text-kecil">99</p>
                    </div>
                    <div class="col-12">
                        <a href="<?= site_url(); ?>tabungan3/<?= $nama_tabungan; ?>" class="btn btn-primary btn-block btn-sm" role="button">Riwayat Transaksi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>