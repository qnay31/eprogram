<?php 
if ($_SESSION["id_pengurus"] == "ketua_yayasan") {
    $yatim   = mysqli_query($conn, "SELECT * FROM data_yatim ORDER BY `nama_yatim` ASC");

    $numYatim= $yatim -> num_rows;

} else {
    $yatim   = mysqli_query($conn, "SELECT * FROM data_yatim WHERE cabang = '$_SESSION[cabang]' ORDER BY `nama_yatim` ASC");

    $numYatim= $yatim -> num_rows;
}


// die(var_dump($$namaBaru[$n]));
?>

<?php if ($_SESSION["id_pengurus"] == "admin_web") { ?>
<!-- Card -->
<div class="col-xxl-4 col-md-4">
    <div class="card info-card sales-card">
        <div class="card-body">
            <h5 class="card-title">Data Akun Eprogram <span>| Admin</span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cloud-download"></i>
                </div>
                <div class="ps-3">
                    <h6><a href="<?= $_SESSION["username"] ?>.php?id_adminKey=akunProgram">Lihat Data</a></h6>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<!-- Card -->
<div class="col-xxl-4 col-md-4">
    <div class="card info-card sales-card">
        <div class="card-body">
            <h5 class="card-title">Data Yatim <span>| Admin</span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cloud-download"></i>
                </div>
                <div class="ps-3">
                    <h6><a href="<?= $_SESSION["username"] ?>.php?id_adminKey=dataYatim">Lihat Data</a></h6>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<!-- Card -->
<div class="col-xxl-4 col-md-4">
    <div class="card info-card sales-card">
        <div class="card-body">
            <h5 class="card-title">Data Log <span>| Admin</span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cloud-download"></i>
                </div>
                <div class="ps-3">
                    <h6><a href="<?= $_SESSION["username"] ?>.php?id_adminKey=log">Lihat Data</a></h6>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<?php } else { ?>
<!-- Card -->
<div class="col-xxl-12">
    <div class="card info-card customers-card">
        <div class="card-body">
            <?php if ($numYatim == 0) { ?>
            <h5 class="card-title">Tidak ada laporan
            </h5>

            <?php } else { ?>
            <h5 class="card-title">Data Yatim
                <?php if ($numYatim > 1) { ?>
                (<?= $numYatim ?>)
                <?php } ?>

            </h5>
            <div class="row mb-3">
                <div class="col-sm-4">
                    <div class="form-group form-inline">
                        <label>Pencarian</label>
                        <input type="text" name="s_keywordGlobal" id="s_keywordGlobal" class="form-control"
                            placeholder="Nama Yatim" style="text-transform: capitalize;">
                    </div>
                </div>
            </div>

            <div class="data_global"></div>
            <?php } ?>

        </div>
    </div>
</div><!-- End Card -->
<?php } ?>