<?php if ($_SESSION["id_pengurus"] == "kepala_cabang" && $_SESSION["cabang"] == "Bogor" || $_SESSION["id_pengurus"] == "kepala_program" && $_SESSION["cabang"] == "Bogor") { ?>
<div class="tab-pane fade show active profile-edit pt-3" id="profile-humas">
    <?php } else { ?>
    <div class="tab-pane fade profile-edit pt-3" id="profile-humas">
        <?php } ?>

        <section class="section dashboard">
            <div class="row">
                <?php
                $no = 1;
                while ($data_guru = $guru_bogor->fetch_assoc()) { ?>
                <!-- Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card customers-card">
                        <div class="card-body bg">
                            <h5 class="card-title"><?= $data_guru["posisi"] ?> <?= $data_guru["cabang"] ?> </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person-circle"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?= ucwords($data_guru["nama"]) ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card -->
                <?php } ?>
            </div>

            <h5 class="card-title">Anak Yatim Bogor</h5>
            <div class="row mb-3">
                <div class="col-sm-4">
                    <div class="form-group form-inline">
                        <label>Pencarian</label>
                        <input type="text" name="s_keywordBogor" id="s_keywordBogor" class="form-control"
                            placeholder="Nama Yatim" style="text-transform: capitalize;">
                    </div>
                </div>
            </div>
            <div class="data_bogor"></div>
        </section>
    </div>