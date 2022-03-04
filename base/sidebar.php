<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <?php if ($_GET["id_forms"] == true) { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <?php } elseif ($_GET["id_perkembangan"] == true) { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <?php } elseif ($_GET["id_profil"] == true) { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <?php } else { ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= $_SESSION["username"] ?>.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <?php } ?>

        <?php if ($_GET["id_perkembangan"] == "perkembanganYatim") { ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= $_SESSION["username"] ?>.php?id_perkembangan=perkembanganYatim">
                <i class="bi bi-book-half"></i>
                <span>Laporan Perkembangan</span>
            </a>
        </li>

        <?php } elseif ($_SESSION["id_pengurus"] == "admin_web") { ?>

        <?php } else { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?id_perkembangan=perkembanganYatim">
                <i class="bi bi-book-half"></i>
                <span>Laporan Perkembangan</span>
            </a>
        </li>
        <?php } ?>

        <!-- End Database Nav -->

        <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "kepala_program" || $_SESSION["id_pengurus"] == "kepala_cabang" || $_SESSION["id_pengurus"] == "admin_web") { ?>
        <?php } else { ?>
        <?php if ($_GET["id_forms"] == "forms_laporan" || $_GET["id_forms"] == "edit_perkembangan") { ?>
        <li class="nav-item">
            <a class="nav-link" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Form</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_laporan" class="active">
                        <i class="bi bi-circle"></i><span>Laporan Yatim </span>
                    </a>
                </li>
            </ul>
        </li>

        <?php } else { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Form</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_laporan">
                        <i class="bi bi-circle"></i><span>Laporan Yatim</span>
                    </a>
                </li>
            </ul>
        </li>
        <?php } ?>
        <?php } ?>

        <!-- End Forms Nav -->
        <?php if ($_SESSION["id_pengurus"] == "admin_web") { ?>

        <?php } else { ?>
        <li class="nav-heading">Pages</li>
        <?php } ?>

        <?php if ($_GET["id_profil"] == "myProfil") { ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= $_SESSION["username"] ?>.php?id_profil=myProfil">
                <i class="bi bi-person"></i>
                <span>Profil</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <?php if ($_SESSION["id_pengurus"] == "kepala_program") { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?id_profil=dataProgram">
                <i class="bi bi-people"></i>
                <span>Data Program</span>
            </a>
        </li><!-- End data member Page Nav -->
        <?php } ?>

        <?php } elseif ($_GET["id_profil"] == "dataPengurus" || $_GET["id_profil"] == "dataProgram" || $_GET["id_profil"] == "dataYatim") { ?>
        <?php if ($_SESSION["id_pengurus"] == "guru") { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?id_profil=myProfil">
                <i class="bi bi-person"></i>
                <span>Profil</span>
            </a>
        </li>
        <?php } ?>
        <!-- End Profile Page Nav -->

        <?php if ($_SESSION["id_pengurus"] == "kepala_program") { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?id_profil=myProfil">
                <i class="bi bi-person"></i>
                <span>Profil</span>
            </a>
        </li><!-- End data member Page Nav -->

        <li class="nav-item">
            <a class="nav-link" href="<?= $_SESSION["username"] ?>.php?id_profil=dataProgram">
                <i class="bi bi-people"></i>
                <span>Data Program</span>
            </a>
        </li>
        <?php } ?>

        <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= $_SESSION["username"] ?>.php?id_profil=dataProgram">
                <i class="bi bi-people"></i>
                <span>Data Program</span>
            </a>
        </li><!-- End data member Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?id_profil=logActivity">
                <i class="bi bi-list-check"></i>
                <span>Log aktivitas</span>
            </a>
        </li>
        <?php } ?>

        <?php if ($_SESSION["id_pengurus"] == "kepala_cabang") { ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= $_SESSION["username"] ?>.php?id_profil=dataProgram">
                <i class="bi bi-people"></i>
                <span>Data Program</span>
            </a>
        </li><!-- End data member Page Nav -->
        <?php } ?>

        <?php } elseif ($_GET["id_profil"] == "logActivity") { ?>
        <?php if ($_SESSION["id_pengurus"] == "guru") { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?id_profil=myProfil">
                <i class="bi bi-person"></i>
                <span>Profil</span>
            </a>
        </li>
        <?php } ?>
        <!-- End Profile Page Nav -->

        <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?id_profil=dataProgram">
                <i class="bi bi-people"></i>
                <span>Data Program</span>
            </a>
        </li><!-- End data member Page Nav -->

        <li class="nav-item">
            <a class="nav-link" href="<?= $_SESSION["username"] ?>.php?id_profil=logActivity">
                <i class="bi bi-list-check"></i>
                <span>Log aktivitas</span>
            </a>
        </li>

        <?php } ?>

        <?php } else { ?>
        <?php if ($_SESSION["id_pengurus"] == "guru") { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?id_profil=myProfil">
                <i class="bi bi-person"></i>
                <span>Profil</span>
            </a>
        </li>
        <?php } ?>
        <!-- End Profile Page Nav -->

        <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?id_profil=dataProgram">
                <i class="bi bi-people"></i>
                <span>Data Program</span>
            </a>
        </li><!-- End data member Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?id_profil=logActivity">
                <i class="bi bi-list-check"></i>
                <span>Log aktivitas</span>
            </a>
        </li><!-- End Log Activity Page Nav -->
        <?php } ?>

        <?php if ($_SESSION["id_pengurus"] == "kepala_cabang") { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?id_profil=dataProgram">
                <i class="bi bi-people"></i>
                <span>Data Program</span>
            </a>
        </li><!-- End data member Page Nav -->
        <?php } ?>

        <?php if ($_SESSION["id_pengurus"] == "kepala_program") { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?id_profil=myProfil">
                <i class="bi bi-person"></i>
                <span>Profil</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?id_profil=dataProgram">
                <i class="bi bi-people"></i>
                <span>Data Program</span>
            </a>
        </li><!-- End data member Page Nav -->
        <?php } ?>

        <?php } ?>
        <!-- End Profile Page Nav -->
    </ul>

</aside><!-- End Sidebar-->