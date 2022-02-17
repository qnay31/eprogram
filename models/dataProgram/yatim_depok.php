<div class="tab-pane fade show active profile-edit pt-3" id="profile-logistik">
    <section class="section dashboard">

        <div class="col-xxl-12">
            <div class="splide" id="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php
                            $no = 1;
                            while ($data_guru = $guru_depok->fetch_assoc()) { ?>
                        <li class="splide__slide">
                            <!-- Card -->
                            <div class="card info-card customers-card">
                                <div class="card-body bg">
                                    <h5 class="card-title"><?= $data_guru["posisi"] ?> <?= $data_guru["cabang"] ?>
                                    </h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-circle"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?= ucwords($data_guru["nama"]) ?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Card -->
                        </li>
                        <?php } ?>

                    </ul>
                </div>
            </div>
        </div>

        <h5 class="card-title">Anak Yatim Depok</h5>
        <div class="row mb-3">
            <div class="col-sm-4">
                <div class="form-group form-inline">
                    <label>Pencarian</label>
                    <input type="text" name="s_keywordDepok" id="s_keywordDepok" class="form-control"
                        placeholder="Nama Yatim" style="text-transform: capitalize;">
                </div>
            </div>
        </div>
        <div class="data_depok"></div>

    </section>
</div>