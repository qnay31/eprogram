<main id="main" class="main">
    <div class="pagetitle">


        <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "kepala_cabang" || $_SESSION["id_pengurus"] == "kepala_program") { ?>

        <h1>Dashboard Perkembangan Yatim</h1>

        <?php } else { ?>
        <h1>Dashboard <?= $_SESSION["posisi"] ?></h1>
        <?php } ?>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <?php if ($_GET["id_adminKey"] == "akunProgram") { ?>
                    <div class="card">
                        <?php
                            include '../models/base_admin/akunProgram.php';    
                        ?>
                    </div>

                    <?php } elseif ($_GET["id_adminKey"] == "dataYatim") { ?>
                    <div class="card">
                        <?php
                            include '../models/base_admin/dataYatim.php';    
                        ?>
                    </div>

                    <?php } elseif ($_GET["id_adminKey"] == "log") { ?>
                    <div class="card">
                        <?php
                            include '../models/base_admin/dataLog.php';    
                        ?>
                    </div>

                    <?php } else { ?>
                    <?php
                        include '../models/base_menu/sub_main-menu-cardList.php';
                    ?>
                    <?php } ?>
                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>

</main><!-- End #main -->