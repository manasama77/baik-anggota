<div class="row">
    <div class="col-12">
        <p class="lead">
            <strong>Riwayat Transaksi</strong><br />
            <small>
                <?php
                if ($nama_simpanan == 1) {
                    echo "Saldo Simpanan Pokok";
                } elseif ($nama_simpanan == 2) {
                    echo "Saldo Simpanan Wajib";
                } elseif ($nama_simpanan == 3) {
                    echo "Saldo Simpanan Sukarela";
                }
                ?>
                - <?= $from->format('d-m-Y'); ?> s/d <?= $to->format('d-m-Y'); ?>
            </small>
        </p>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-2">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-dark" style="font-size: 10px;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Debit</th>
                        <th>Kredit</th>
                        <th>Saldo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    for ($i = 0; $i <= $interval; $i++) {
                    ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $from->format('d-m-Y'); ?></td>
                            <td>999,000</td>
                            <td>999,000</td>
                            <td>999,000</td>
                        </tr>
                    <?php
                        $no++;
                        $from->modify('+1 day');
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>