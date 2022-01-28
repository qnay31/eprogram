<?php
$query   = mysqli_query($conn, "SELECT * FROM data_yatim WHERE cabang = '$_SESSION[cabang]' ORDER BY `nama_yatim` ASC ");

if (isset($_POST["tambah"]) ) {
    $link = $_SESSION["username"];
        if(tambah_yatim($_POST) > 0 ) {
            echo "<script>
                    alert('Yatim berhasil ditambah');
                    document.location.href = '$link.php?id_forms=forms_laporan';
                </script>";    
        } 
            else {
            echo mysqli_error($conn);
        }
    }

    if (isset($_POST["inputLaporan"]) ) {
        $link = $_SESSION["username"];
            if(perkembanganYatim($_POST) > 0 ) {
                echo "<script>
                        alert('Perkembangan yatim berhasil ditambah');
                        document.location.href = '$link.php?id_forms=forms_laporan';
                    </script>";    
            } 
                else {
                echo mysqli_error($conn);
            }
        }

$q  = mysqli_query($conn, "SELECT * FROM perkembangan_yatim WHERE cabang = '$_SESSION[cabang]' ORDER BY `nama_yatim` ASC");

?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Form Laporan Yatim</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <li class="breadcrumb-item">Form</li>
                <li class="breadcrumb-item active">Laporan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns pengajuan-->
            <div class="col-lg-12" id="form-pengajuan">
                <div class="row">
                    <?php include '../models/forms/forms_models/forms-nav.php'; ?>
                </div>

                <!-- Laporan  -->
                <div class="col-12">
                    <div class="card">
                        <?php include '../models/forms/form_laporan.php'; ?>
                    </div>

                    <div class="card">
                        <?php include '../models/forms/laporan.php'; ?>
                    </div>
                </div><!-- End Laporan  -->
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->