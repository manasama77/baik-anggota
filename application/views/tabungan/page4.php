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
                            <td>9,000</td>
                            <td>0</td>
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