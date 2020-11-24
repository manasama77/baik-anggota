<div class="row">
    <div class="col-12">
        <p class="lead">
            <h5><strong>Edit Profil</strong></h5>
        </p>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-2">
        <div class="card bg-blue">
            <div class="card-body card-small-padding">
                <form id="form_add" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="cif_no">No Anggota</label>
                        <input type="text" class="form-control form-control-sm" id="cif_no" name="cif_no" value="<?= $this->session->userdata('cif_no'); ?>" required readonly>
                    </div>
                    <div class="form-group">
                        <label for="password_lama">Password Lama</label>
                        <input type="password" class="form-control form-control-sm" id="password_lama" name="password_lama" required>
                    </div>
                    <div class="form-group">
                        <label for="password_baru">Password Baru</label>
                        <input type="password" class="form-control form-control-sm" id="password_baru" name="password_baru" required>
                    </div>
                    <div class="form-group">
                        <label for="password_baru_confirm">Confirm Password Baru</label>
                        <input type="password" class="form-control form-control-sm" id="password_baru_confirm" name="password_baru_confirm" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>