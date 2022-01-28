<?php
$id     = $_GET["id_unik"];

    if (isset($_POST["input"]) ) {
    $link = $_SESSION["username"];
    if(edit_lapYatim($_POST) > 0 ) {
        echo "<script>
                alert('Data perkembangan berhasil diubah');
                document.location.href = '$link.php?id_forms=forms_laporan';
            </script>";            
        } 
            else {
            echo mysqli_error($conn);
        }
    }

    $q  = mysqli_query($conn, "SELECT * FROM perkembangan_yatim WHERE id_pengurus = '$_SESSION[id_pengurus]' AND `guru` = '$_SESSION[nama]' AND id = '$id' ");
    $data       = mysqli_fetch_assoc($q);

// die(var_dump($s));
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Form Laporan Yatim</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <li class="breadcrumb-item">Form</li>
                <li class="breadcrumb-item">Laporan</li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns pengajuan-->
            <div class="col-lg-12" id="form-pengajuan">
                <!-- Laporan  -->
                <div class="col-12">
                    <div class="card">
                        <?php include '../models/forms/edit_lapYatim.php'; ?>
                    </div>
                </div><!-- End Laporan  -->
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->