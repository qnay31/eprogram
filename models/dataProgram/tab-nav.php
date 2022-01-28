<?php if ($_SESSION["id_pengurus"] == "kepala_program" && $_SESSION["cabang"] == "Depok") { ?>
<li class="nav-item">
    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-logistik">Yatim Depok
        <?php if ($yatim_depok > 1) { ?>
        (<?= $yatim_depok ?>)
        <?php } ?>
    </button>
</li>

<div class="button">
    <a class="btn btn-secondary w-100 mb-3" data-bs-toggle="modal" data-bs-target="#modalDaily">
        Tambah Data Yatim<span class="badge badge-danger badge-counter">New</span>
    </a>
</div>

<!-- Modal -->
<div class="modal fade" id="modalDaily" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Data Yatim</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="forms">
                    <form action="" method="post">
                        <div class="mb-3">
                            <div class="form-text mb-2">
                                Guru
                            </div>
                            <input type="hidden" name="id" value="<?= $_SESSION["id"] ?>">
                            <input type="hidden" name="link" value="<?= $_SESSION["id_pengurus"] ?>">
                            <input type="hidden" name="posisi" value="<?= $_SESSION["posisi"] ?>">
                            <input type="text" class="form-control" name="nama" value="<?= $_SESSION["nama"] ?>"
                                readonly>
                        </div>

                        <div class="mb-3">
                            <div id="disabledSelect" class="form-text mb-2">
                                Nama Yatim
                            </div>
                            <input type="text" class="form-control" name="nameYatim" placeholder="nama yatim"
                                id="akunName" style="text-transform: capitalize;" autocomplete="off" required
                                oninvalid="this.setCustomValidity('Nama yatim tidak boleh kosong')"
                                oninput="this.setCustomValidity('')">

                        </div>

                        <div class="button">
                            <input type="submit" name="tambah" class="btn btn-primary w-100" value="Tambah Data">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>

<?php } elseif ($_SESSION["id_pengurus"] == "kepala_cabang" && $_SESSION["cabang"] == "Bogor" || $_SESSION["id_pengurus"] == "kepala_program" && $_SESSION["cabang"] == "Bogor") { ?>
<li class="nav-item">
    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-humas">Yatim Bogor
        <?php if ($yatim_bogor > 1) { ?>
        (<?= $yatim_bogor ?>)
        <?php } ?>
    </button>
</li>

<?php if ($_SESSION["id_pengurus"] == "kepala_program" && $_SESSION["cabang"] == "Bogor") { ?>
<div class="button">
    <a class="btn btn-secondary w-100 mb-3" data-bs-toggle="modal" data-bs-target="#modalDaily">
        Tambah Data Yatim<span class="badge badge-danger badge-counter">New</span>
    </a>
</div>

<?php } ?>

<!-- Modal -->
<div class="modal fade" id="modalDaily" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Data Yatim</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="forms">
                    <form action="" method="post">
                        <div class="mb-3">
                            <div class="form-text mb-2">
                                Guru
                            </div>
                            <input type="hidden" name="id" value="<?= $_SESSION["id"] ?>">
                            <input type="hidden" name="link" value="<?= $_SESSION["id_pengurus"] ?>">
                            <input type="hidden" name="posisi" value="<?= $_SESSION["posisi"] ?>">
                            <input type="text" class="form-control" name="nama" value="<?= $_SESSION["nama"] ?>"
                                readonly>
                        </div>

                        <div class="mb-3">
                            <div id="disabledSelect" class="form-text mb-2">
                                Nama Yatim
                            </div>
                            <input type="text" class="form-control" name="nameYatim" placeholder="nama yatim"
                                id="akunName" style="text-transform: capitalize;" autocomplete="off" required
                                oninvalid="this.setCustomValidity('Nama yatim tidak boleh kosong')"
                                oninput="this.setCustomValidity('')">

                        </div>

                        <div class="button">
                            <input type="submit" name="tambah" class="btn btn-primary w-100" value="Tambah Data">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>

<?php } else { ?>
<li class="nav-item">
    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-logistik">Yatim Depok
        <?php if ($yatim_depok > 1) { ?>
        (<?= $yatim_depok ?>)
        <?php } ?>
    </button>
</li>

<li class="nav-item">
    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-humas">Yatim Bogor
        <?php if ($yatim_bogor > 1) { ?>
        (<?= $yatim_bogor ?>)
        <?php } ?>
    </button>
</li>
<?php } ?>