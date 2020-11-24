<div class="row">
    <div class="col-12">
        <p class="lead">
            <strong>Riwayat Transaksi</strong>
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
            </small>
        </p>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-2">
        <div class="card bg-blue">
            <div class="card-body">
                <form id="form_add" action="<?= site_url('simpanan3'); ?>" method="get">
                    <div class="form-group">
                        <label for="from">Dari Tanggal</label>
                        <input type="text" class="form-control datepicker" id="from" name="from" required />
                    </div>
                    <div class="form-group">
                        <label for="to">Sampai Tanggal</label>
                        <input type="text" class="form-control datepicker" id="to" name="to" required />
                    </div>
                    <div class="form-group">
                        <input type="hidden" id="nama_simpanan" name="nama_simpanan" value="<?= $nama_simpanan; ?>" />
                        <button type="submit" class="btn btn-primary btn-block">
                            Tampilkan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>