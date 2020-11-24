<div class="row">
    <div class="col-12">
        <p class="lead"><strong>Transfer ke</strong></p>
    </div>
</div>
<div class="row mb-4 mt-2">
    <div class="col-12">
        <div class="media usercard bg-dark pl-2 pr-2 pt-2 pb-1">
            <img class="mr-4 rounded-circle pp align-self-center" src="<?= base_url(); ?>public/img/team2.jpg" alt="PP" />
            <div class="media-body">
                <h5 class="mt-0">
                    Amin Hasan<br />
                    <small>
                        1234567890<br />
                        Majlis Menanti Pagi
                    </small>
                </h5>
            </div>
        </div>
    </div>
</div>
<div class="row mb-4 mt-2">
    <div class="col-12">
        <form action="<?= site_url(); ?>transfer3">
            <div class="form-group">
                <label for="jumlah_transfer">Jumlah Transfer</label>
                <input type="number" class="form-control" id="jumlah_transfer" name="jumlah_transfer" min="10000" required />
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">
                    Transfer
                </button>
            </div>
        </form>
    </div>
</div>