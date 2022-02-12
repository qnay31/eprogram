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