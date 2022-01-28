<div class="tab-pane fade profile-edit pt-3" id="profile-edit">
    <!-- Profile Edit Form -->
    <form action="" method="post" onsubmit="return validasi_profil(this)">
        <div class="row mb-3">
            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
            <div class="col-md-8 col-lg-9">
                <input type="hidden" name="key" value="<?= $_SESSION["id"] ?>">
                <input name="nama" type="text" class="form-control" value="<?= $nama ?>" id="alpabet"
                    style="text-transform: capitalize;">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Username</label>
            <div class="col-md-8 col-lg-9">
                <input type="text" class="form-control" value="<?= $_SESSION["username"] ?>" id="alpabet_user" readonly>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" name="edit_profil" class="btn btn-primary">Simpan Perubahan</button>
        </div>
    </form><!-- End Profile Edit Form -->
</div>