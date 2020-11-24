<div class="row">
    <div class="col-12">
        <p class="lead"><strong>TASYA </strong><small>(Tabungan Syawal)<br />1234567890</small></p>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-2">
        <div class="card bg-blue">
            <div class="card-body">
                <form action="<?= site_url(); ?>tabungan4" method="get">
                    <div class="form-group">
                        <label for="from">Dari Tanggal</label>
                        <input type="text" class="form-control datepicker" id="from" name="from" required />
                    </div>
                    <div class="form-group">
                        <label for="to">Sampai Tanggal</label>
                        <input type="text" class="form-control datepicker" id="to" name="to" required />
                    </div>
                    <div class="form-group">
                        <input type="hidden" id="nama_tabungan" name="nama_tabungan" value="<?= $nama_tabungan; ?>">
                        <button type="submit" class="btn btn-primary btn-block">
                            Tampilkan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>