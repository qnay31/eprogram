<div class="row">
    <?php
        error_reporting(0);
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
                    <?php
                        $qFoto      = mysqli_query($conn, "SELECT * FROM foto_yatim WHERE nomor_id = '$id'");
                        $nums       = $qFoto->num_rows;
                        $dFoto      = mysqli_fetch_assoc($qFoto);
                        $newProfil  = $dFoto["foto"];
                    ?>
                    <?php if ($nums === 1) { ?>
                    <img src="../assets/img/profile/<?= $newProfil ?>" id="uploaded_image"
                        class="img-responsive rounded-circle" />

                    <?php } else { ?>
                    <img src="../assets/img/icons/<?= $_SESSION["profil"] ?>" id="uploaded_image"
                        class="img-responsive rounded-circle" />
                    <?php } ?>
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