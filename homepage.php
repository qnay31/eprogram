<?php
error_reporting(0);
session_start();

if ($_SESSION["id_pengurus"] == "ketua_yayasan") {
} elseif ($_SESSION["id_pengurus"] == "kepala_cabang") {
} else {
    if (!isset($_SESSION["halaman_utama"])) {
        header("Location: ../index.php?pesan=gagal");
        exit;
    }
}

require 'function.php';

$home_query = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE username = '$_SESSION[username]' ");
$home_data  = mysqli_fetch_assoc($home_query);
$nama       = $home_data['nama'];
$profil     = $home_data['profil'];

?>
<!DOCTYPE html>
<html lang="en">

<?php
include 'base/header.php'
?>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="<?= $_SESSION["username"] ?>.php" class="logo d-flex align-items-center">
                <img src="../assets/img/icons/logo_favicon.png" alt="">
                <span class="d-none d-lg-block">Eprogram</span>
            </a>

            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <?php
            include 'base/icon-navigation.php';
        ?>
    </header><!-- End Header -->

    <?php 
        include 'base/sidebar.php';
    ?>

    <!-- laporan yatim -->
    <?php if ($_GET["id_forms"] == "forms_laporan") { ?>
    <?php
        include 'forms/laporanYatim.php';
    ?>

    <!-- edit perkembangan yatim -->
    <?php } elseif ($_GET["id_forms"] == "edit_perkembangan") { ?>
    <?php
        include 'forms/edit_laporan.php';
    ?>

    <!-- laporan perkembangan -->
    <?php } elseif ($_GET["id_perkembangan"] == "perkembanganYatim") { ?>
    <?php
        include 'laporan/perkembangan.php';
    ?>

    <!-- myProfil -->
    <?php } elseif ($_GET["id_profil"] == "myProfil") { ?>
    <?php
        include 'profil/set_profil.php';
    ?>

    <!-- data Pengurus -->
    <?php } elseif ($_GET["id_profil"] == "dataPengurus") { ?>
    <?php
        include 'profil/dataPengurus.php';
    ?>

    <!-- data program -->
    <?php } elseif ($_GET["id_profil"] == "dataProgram") { ?>
    <?php
        include 'profil/dataProgram.php';
    ?>

    <!-- log aktivitas -->
    <?php } elseif ($_GET["id_profil"] == "logActivity") { ?>
    <?php
        include 'profil/log_aktivitas.php';
    ?>

    <?php } else { ?>
    <?php if ($_GET["id_akun"] == "") { ?>
    <?php
        include 'base/main-menu.php';
    ?>

    <?php } else { ?>
    <?php
        include 'base/main-menu_yatim.php';
    ?>
    <?php } ?>

    <?php } ?>

    <?php
        include 'base/footer.php';
    ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <?php
        include 'base/script.php';
    ?>
</body>

</html>