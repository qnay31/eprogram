<?php
if ($_SESSION["id_pengurus"] == "admin_web") {
    $querySaran = mysqli_query($conn, "SELECT * FROM kritiksaran ORDER BY tgl_saran DESC");
    $saran      = $querySaran->num_rows;

} else {
    $querySaran = mysqli_query($conn, "SELECT * FROM kritiksaran WHERE nama = '$_SESSION[nama]' ORDER BY tgl_saran DESC");
    $saran      = $querySaran->num_rows;
}

if (isset($_POST["inputSaran"]) ) {
    $link = $_SESSION["username"];
    if(kritikSaran($_POST) > 0 ) {
    echo "<script>
            alert('Kritik Dan Saran Berhasil Dikirim');
            document.location.href = '$link.php';
        </script>";            
    } 
        else {
        echo mysqli_error($conn);
    }
}

if (isset($_POST["editSaran"]) ) {
    $link = $_SESSION["username"];
    if(editSaran($_POST) > 0 ) {
    echo "<script>
            alert('Saran berhasil diubah');
            document.location.href = '$link.php';
        </script>";            
    } 
        else {
        echo mysqli_error($conn);
    }
}

if (isset($_POST["balasSaran"]) ) {
    $link = $_SESSION["username"];
    if(balasSaran($_POST) > 0 ) {
    echo "<script>
            alert('Balasan terkirim');
            document.location.href = '$link.php';
        </script>";            
    } 
        else {
        echo mysqli_error($conn);
    }
}

?>

<li class="nav-item dropdown" id="showEdit">
    <a class="nav-link nav-icon showDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-megaphone"></i>
        <span class="badge bg-danger badge-number">New</span>

    </a><!-- End Notification Icon -->
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications ketua-yayasan">
        <?php if ($_SESSION["id_pengurus"] == "admin_web") { ?>
        <?php if ($saran > 0) { ?>
        <li class="dropdown-header">
            <?= $saran; ?> Pesan Masuk! <b></b> <i class="bi bi-chat-square-text-fill"></i>
        </li>

        <?php } else { ?>
        <li class="dropdown-header">
            Tidak ada pesan masuk! <i class="bi bi-chat-square-text-fill"></i>
        </li>
        <?php } ?>
        <?php } else { ?>
        <a href="#" data-bs-toggle="modal" data-bs-target="#modalLaporan">
            <li class="dropdown-header">
                Tulis kritik dan saran disini! <i class="bi bi-pencil"></i>
            </li>
        </a>
        <?php } ?>
        <?php if ($saran > 0) { ?>
        <?php
            $no = 1;
            while ($data = mysqli_fetch_array($querySaran)) { 
                ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li class="notification-item ">
            <div class="saranMasukan">
                <h4 class="textName"><?= ucwords($data["nama"]); ?></h4>
                <p><?= ucfirst($data["saran"]); ?> </p>
                <p><?= date('d-m-Y', strtotime($data['tgl_saran'])); ?></p>
                <?php if ($_SESSION["id_pengurus"] == "admin_web") { ?>
                <p class="editLaporanSaran">
                    <?php if ($data["balasan"] == "") { ?>
                    <a href="#" class="editSaran show" data-id="<?= $data["id"]; ?>">Balas
                        <?= ucwords($data["nama"]); ?></a>

                    <?php } ?>
                </p>
                <div class="menu<?= $data["id"]; ?>" style="display: none;">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $data["id"]; ?>">
                        <input type="text" class="form-control" placeholder="Tulis disini.." aria-label="Username"
                            aria-describedby="basic-addon1" name="balasan" autocomplete="off" required>
                        <div class="button">
                            <input type="submit" name="balasSaran" class="btn btn-primary w-100" value="Kirim Balasan">
                        </div>
                    </form>
                </div>
                <?php } else { ?>
                <p class="editLaporanSaran">
                    <a href="#" class="editSaran showEdit" data-id="<?= $data["id"]; ?>">Edit saran</a>
                    <a href="../models/base_admin/hapus_saran.php?id_unik=<?= $data['id'] ?>" class=" hapusSaran"
                        onclick="return confirm('Saran akan dihapus?!')">Hapus saran</a>
                </p>
                <div class="menuEdit<?= $data["id"]; ?>" style="display: none;">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $data["id"] ?>">
                        <div class="form-floating mb-2">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                style="height: 100px" name="saran" required
                                oninvalid="this.setCustomValidity('Saran tidak boleh kosong')"
                                oninput="this.setCustomValidity('')"><?= ucfirst($data["saran"]); ?></textarea>
                            <label for="floatingTextarea2">Tulis disini..</label>
                        </div>
                        <div class="button">
                            <input type="submit" name="editSaran" class="btn btn-primary w-100" value="Kirim Edit">
                        </div>
                    </form>
                </div>
                <?php } ?>
            </div>
        </li>

        <?php if ($data['balasan'] == "") { ?>

        <?php } else { ?>
        <li class="notification-item saranBalasan">
            <div class="saranMasukan">
                <i class="bi bi-reply-fill"></i>balasan
                <p><?= ucfirst($data["balasan"]); ?></p>
                <p><?= date('d-m-Y', strtotime($data['tgl_balasan'])) ?></p>
            </div>
        </li>
        <?php } ?>

        <?php } ?>

        <?php } ?>
    </ul><!-- End Notification Dropdown Items -->
</li>

<!-- End Messages Nav -->