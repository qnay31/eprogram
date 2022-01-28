<?php 
// guru
$guru_depok = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id_pengurus = 'guru' AND cabang = 'Depok' ");
$guru_bogor = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id_pengurus = 'guru' AND cabang = 'Bogor' ");

// yatim depok
$AFB_depok = mysqli_query($conn, "SELECT * FROM data_yatim WHERE cabang = 'Depok' ORDER BY `nama_yatim` ASC");
$yatim_depok = mysqli_num_rows($AFB_depok);
// die(var_dump($AFB_depok));

// yatim bogor
$AFB_bogor = mysqli_query($conn, "SELECT * FROM data_yatim WHERE cabang = 'Bogor' ORDER BY `nama_yatim` ASC");
$yatim_bogor = mysqli_num_rows($AFB_bogor);

if (isset($_POST["tambah"]) ) {
    $link = $_SESSION["username"];
        if(tambah_yatim($_POST) > 0 ) {
            echo "<script>
                    alert('Yatim berhasil ditambah');
                    document.location.href = '$link.php?id_profil=dataProgram';
                </script>";    
        } 
            else {
            echo mysqli_error($conn);
        }
    }

?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Program</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Program</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <?php include '../models/dataProgram/tab-nav.php'; ?>
                        </ul>

                        <div class="tab-content pt-2">
                            <?php if ($_SESSION["id_pengurus"] == "kepala_program" && $_SESSION["cabang"] == "Depok") { ?>
                            <?php include '../models/dataProgram/yatim_depok.php'; ?>

                            <?php } elseif ($_SESSION["id_pengurus"] == "kepala_cabang" && $_SESSION["cabang"] == "Bogor" || $_SESSION["id_pengurus"] == "kepala_program" && $_SESSION["cabang"] == "Bogor") { ?>
                            <?php include '../models/dataProgram/yatim_bogor.php'; ?>

                            <?php } else { ?>
                            <?php include '../models/dataProgram/yatim_depok.php'; ?>

                            <?php include '../models/dataProgram/yatim_bogor.php'; ?>
                            <?php } ?>

                        </div><!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>