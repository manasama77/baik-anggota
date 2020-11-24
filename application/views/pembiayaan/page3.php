<div class="row">
    <div class="col-12">
        <p class="lead">
            <strong>
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
            </strong>
            <br />
            <small>1234567890</small>
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
                        <th>Tgl Angsur</th>
                        <th>Tgl Bayar</th>
                        <th>Jumlah</th>
                        <th>Saldo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>01-01-2002</td>
                        <td>01-01-2002</td>
                        <td>9,000</td>
                        <td>999,000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>02-01-2002</td>
                        <td>01-01-2002</td>
                        <td>9,000</td>
                        <td>999,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>