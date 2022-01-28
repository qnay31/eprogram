<div class="row">
    <?php
    session_start();
            require 'function.php';
            
            $s_keyword="";
            if (isset($_POST['keyword'])) {
                $s_keyword = $_POST['keyword'];
            }
            
            $search_keyword = '%'. $s_keyword .'%';
            $no = 1;

            $query = "SELECT * FROM data_yatim WHERE nama_yatim LIKE ? AND cabang = 'Depok' ORDER BY nama_yatim";
            $dewan1 = $conn->prepare($query);
            
            $dewan1->bind_param('s', $search_keyword);
            $dewan1->execute();
            $res1 = $dewan1->get_result();

        if ($res1->num_rows > 0) {
            while ($row = $res1->fetch_assoc()) {
                $id = $row['id'];
                $nama_yatim = $row['nama_yatim'];
        ?>
    <!-- Card -->
    <div class="col-xxl-4 col-md-4">
        <div class="card info-card revenue-card">
            <div class="card-body bg">
                <h5 class="card-title">Yatim <?= $row["cabang"] ?></h5>
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-circle"></i>
                    </div>
                    <div class="ps-3">
                        <h6><?= ucwords($nama_yatim) ?></h6>

                    </div>
                </div>
            </div>
            <a class="viewData" href="<?= $_SESSION["username"] ?>.php?id_profil=dataYatim&id_akun=<?= $id ?>">Lihat
                Perkembangan</a>
        </div>
    </div>

    <?php } } else { ?>
    <!-- Card -->
    <div class="col-xxl-4 col-md-4">
        <div class="card info-card revenue-card">
            <div class="card-body bg">
                <h5 class="card-title">Data tidak ditemukan</h5>
            </div>
        </div>
    </div>
    <?php } ?>
</div>