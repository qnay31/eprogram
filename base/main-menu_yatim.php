<?php

$Account    = $_GET["id_akun"];

$qYatim     = mysqli_query($conn, "SELECT * FROM data_yatim WHERE id = '$Account'");
$dYatim     = mysqli_fetch_assoc($qYatim);

$q     = mysqli_query($conn, "SELECT * FROM perkembangan_yatim WHERE nama_yatim = '$dYatim[nama_yatim]'");

// tambah perkemabangan
if (isset($_POST["inputLaporan"]) ) {
    $link = $_SESSION["username"];
        if(perkembanganYatim($_POST) > 0 ) {
            echo "<script>
                    alert('Perkembangan yatim berhasil ditambah');
                    document.location.href = '$link.php?id_akun=$Account';
                </script>";    
        } 
            else {
            echo mysqli_error($conn);
        }
    }

// ubah nama lengkap
if ($_GET["id_profil"] == "") {
    if (isset($_POST["ubah_nama"]) ) {
        $link = $_SESSION["username"];
            if(ubah_nama($_POST) > 0 ) {
                echo "<script>
                        alert('Nama lengkap berhasil diubah');
                        document.location.href = '$link.php?id_akun=$Account';
                    </script>";    
            } 
                else {
                echo mysqli_error($conn);
            }
        }
    
    // alamat yatim
    if (isset($_POST["ubah_alamat"]) ) {
        $link = $_SESSION["username"];
            if(ubah_alamat($_POST) > 0 ) {
                echo "<script>
                        alert('Alamat berhasil diubah');
                        document.location.href = '$link.php?id_akun=$Account';
                    </script>";    
            } 
                else {
                echo mysqli_error($conn);
            }
        }
    
    // tanggal lahir
    if (isset($_POST["ubah_lahir"]) ) {
        $link = $_SESSION["username"];
            if(ubah_lahir($_POST) > 0 ) {
                echo "<script>
                        alert('Kelahiran berhasil diubah');
                        document.location.href = '$link.php?id_akun=$Account';
                    </script>";    
            } 
                else {
                echo mysqli_error($conn);
            }
        }
    
    // nama ibu
    if (isset($_POST["ubah_ibu"]) ) {
        $link = $_SESSION["username"];
            if(ubah_ibu($_POST) > 0 ) {
                echo "<script>
                        alert('Nama ibu berhasil diubah');
                        document.location.href = '$link.php?id_akun=$Account';
                    </script>";    
            } 
                else {
                echo mysqli_error($conn);
            }
        }
    
    // nama ayah
    if (isset($_POST["ubah_ayah"]) ) {
        $link = $_SESSION["username"];
            if(ubah_ayah($_POST) > 0 ) {
                echo "<script>
                        alert('Nama ayah berhasil diubah');
                        document.location.href = '$link.php?id_akun=$Account';
                    </script>";    
            } 
                else {
                echo mysqli_error($conn);
            }
        }
    
    // sekolah
    if (isset($_POST["ubah_sekolah"]) ) {
        $link = $_SESSION["username"];
            if(ubah_sekolah($_POST) > 0 ) {
                echo "<script>
                        alert('Asal sekolah berhasil diubah');
                        document.location.href = '$link.php?id_akun=$Account';
                    </script>";    
            } 
                else {
                echo mysqli_error($conn);
            }
        }
    
    // kelas
    if (isset($_POST["ubah_kelas"]) ) {
        $link = $_SESSION["username"];
            if(ubah_kelas($_POST) > 0 ) {
                echo "<script>
                        alert('Kelas berhasil diubah');
                        document.location.href = '$link.php?id_akun=$Account';
                    </script>";    
            } 
                else {
                echo mysqli_error($conn);
            }
        }

} else {
    if (isset($_POST["ubah_nama"]) ) {
    $link = $_SESSION["username"];
        if(ubah_nama($_POST) > 0 ) {
            echo "<script>
                    alert('Nama lengkap berhasil diubah');
                    document.location.href = '$link.php?id_profil=dataYatim&id_akun=$Account';
                </script>";    
        } 
            else {
            echo mysqli_error($conn);
        }
    }

// alamat yatim
if (isset($_POST["ubah_alamat"]) ) {
    $link = $_SESSION["username"];
        if(ubah_alamat($_POST) > 0 ) {
            echo "<script>
                    alert('Alamat berhasil diubah');
                    document.location.href = '$link.php?id_profil=dataYatim&id_akun=$Account';
                </script>";    
        } 
            else {
            echo mysqli_error($conn);
        }
    }

// tanggal lahir
if (isset($_POST["ubah_lahir"]) ) {
    $link = $_SESSION["username"];
        if(ubah_lahir($_POST) > 0 ) {
            echo "<script>
                    alert('Kelahiran berhasil diubah');
                    document.location.href = '$link.php?id_profil=dataYatim&id_akun=$Account';
                </script>";    
        } 
            else {
            echo mysqli_error($conn);
        }
    }

// nama ibu
if (isset($_POST["ubah_ibu"]) ) {
    $link = $_SESSION["username"];
        if(ubah_ibu($_POST) > 0 ) {
            echo "<script>
                    alert('Nama ibu berhasil diubah');
                    document.location.href = '$link.php?id_profil=dataYatim&id_akun=$Account';
                </script>";    
        } 
            else {
            echo mysqli_error($conn);
        }
    }

// nama ayah
if (isset($_POST["ubah_ayah"]) ) {
    $link = $_SESSION["username"];
        if(ubah_ayah($_POST) > 0 ) {
            echo "<script>
                    alert('Nama ayah berhasil diubah');
                    document.location.href = '$link.php?id_profil=dataYatim&id_akun=$Account';
                </script>";    
        } 
            else {
            echo mysqli_error($conn);
        }
    }

// sekolah
if (isset($_POST["ubah_sekolah"]) ) {
    $link = $_SESSION["username"];
        if(ubah_sekolah($_POST) > 0 ) {
            echo "<script>
                    alert('Asal sekolah berhasil diubah');
                    document.location.href = '$link.php?id_profil=dataYatim&id_akun=$Account';
                </script>";    
        } 
            else {
            echo mysqli_error($conn);
        }
    }

// kelas
if (isset($_POST["ubah_kelas"]) ) {
    $link = $_SESSION["username"];
        if(ubah_kelas($_POST) > 0 ) {
            echo "<script>
                    alert('Kelas berhasil diubah');
                    document.location.href = '$link.php?id_profil=dataYatim&id_akun=$Account';
                </script>";    
        } 
            else {
            echo mysqli_error($conn);
        }
    }
}
?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data <?= ucwords($dYatim["nama_yatim"]) ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <?php if ($_GET["id_profil"] == "dataYatim") { ?>
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php?id_profil=dataProgram">Data
                        Program</a></li>
                <?php } ?>
                <li class="breadcrumb-item active"><?= ucwords($dYatim["nama_yatim"]) ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="../assets/img/icons/<?= $profil ?>" alt="Profile" class="rounded-circle">
                        <h2><?= ucwords($dYatim["nama_yatim"]) ?></h2>
                        <h3>Yatim <?= $dYatim["cabang"] ?></h3>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body profile-card d-flex flex-column">
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                <h5 class="card-title">Profile Details</h5>

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 label ">Nama Lengkap</div>
                                    <div class="col-lg-8 col-md-8">
                                        <?= ucwords($dYatim["nama_yatim"]) ?>
                                        <?php if ($_SESSION["id_pengurus"] == "kepala_program") { ?>
                                        <a href="" data-bs-toggle="modal" data-bs-target="#nama">
                                            <i class="bi bi-pencil-square" data-bs-toggle="tooltip"
                                                data-bs-placement="right" title="Ubah Nama"></i>
                                        </a>
                                        <?php } ?>
                                        <!-- Modal -->
                                        <div class="modal fade" id="nama" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Ubah Nama</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="" method="post">
                                                            <div class="mb-3">
                                                                <div class="form-text mb-2">
                                                                    Data Yatim
                                                                </div>
                                                                <input type="hidden" name="id"
                                                                    value="<?= $dYatim["id"] ?>">
                                                                <input type="hidden" name="link"
                                                                    value="<?= $dYatim["nomor_id"] ?>">
                                                                <input type="text" class="form-control" name="nama"
                                                                    value="<?= ucwords($dYatim["nama_yatim"]) ?>"
                                                                    readonly>
                                                            </div>

                                                            <div class="mb-3">
                                                                <div id="disabledSelect" class="form-text mb-2">
                                                                    Nama Terbaru
                                                                </div>
                                                                <input type="text" class="form-control" name="namaNew"
                                                                    placeholder="nama yatim terbaru"
                                                                    value="<?= ucwords($dYatim["nama_yatim"]) ?>"
                                                                    style="text-transform: capitalize;"
                                                                    autocomplete="off" required
                                                                    oninvalid="this.setCustomValidity('Nama Lengkap tidak boleh kosong')"
                                                                    oninput="this.setCustomValidity('')">

                                                            </div>

                                                            <div class="button">
                                                                <input type="submit" name="ubah_nama"
                                                                    class="btn btn-primary w-100" value="Simpan Data">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 label ">Usia</div>
                                    <div class="col-lg-8 col-md-8">
                                        <?php if ($dYatim["tempatLahir"] == "") { ?>
                                        Tidak Ada Info

                                        <?php } else { ?>
                                        <?php 
                                            $awal   = $dYatim['tgl_lahir'];
                                            $akhir  = date("Y-m-d");

                                            $tanggal    = new DateTime($awal);
                                            $today      = new DateTime($akhir);

                                            $y = $today->diff($tanggal)->y;
                                            ?>

                                        <?= $y ?> Tahun
                                        <?php } ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 label">Alamat</div>
                                    <div class="col-lg-8 col-md-8">
                                        <?php if ($dYatim["alamat"] == "") { ?>
                                        Tidak Ada Info

                                        <?php } else { ?>
                                        <?= ucwords($dYatim["alamat"]) ?>
                                        <?php } ?>

                                        <?php if ($_SESSION["id_pengurus"] == "kepala_program") { ?>
                                        <a href="" data-bs-toggle="modal" data-bs-target="#alamat">
                                            <i class="bi bi-pencil-square" data-bs-toggle="tooltip"
                                                data-bs-placement="right" title="Ubah Alamat"></i>
                                        </a>
                                        <?php } ?>
                                        <!-- Modal -->
                                        <div class="modal fade" id="alamat" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Ubah Alamat</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="" method="post">
                                                            <div class="mb-3">
                                                                <div class="form-text mb-2">
                                                                    Data Yatim
                                                                </div>
                                                                <input type="hidden" name="id"
                                                                    value="<?= $dYatim["id"] ?>">
                                                                <input type="hidden" name="link"
                                                                    value="<?= $dYatim["nomor_id"] ?>">
                                                                <input type="text" class="form-control" name="nama"
                                                                    value="<?= ucwords($dYatim["nama_yatim"]) ?>"
                                                                    readonly>
                                                            </div>

                                                            <div class="mb-3">
                                                                <div id="disabledSelect" class="form-text mb-2">
                                                                    Alamat
                                                                </div>
                                                                <input type="text" class="form-control" name="alamat"
                                                                    placeholder="alamat yatim"
                                                                    value="<?= ucwords($dYatim["alamat"]) ?>"
                                                                    style="text-transform: capitalize;"
                                                                    autocomplete="off">

                                                            </div>

                                                            <div class="button">
                                                                <input type="submit" name="ubah_alamat"
                                                                    class="btn btn-primary w-100" value="Simpan Data">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 label">TTL</div>
                                    <div class="col-lg-8 col-md-8">

                                        <?php if ($dYatim["tempatLahir"] == "") { ?>
                                        Tidak Ada Info

                                        <?php } else { ?>
                                        <?= ucwords($dYatim["tempatLahir"]) ?>,
                                        <?= date('d-m-Y', strtotime($dYatim['tgl_lahir'])); ?>
                                        <?php } ?>

                                        <?php if ($_SESSION["id_pengurus"] == "kepala_program") { ?>
                                        <a href="" data-bs-toggle="modal" data-bs-target="#ttl">
                                            <i class="bi bi-pencil-square" data-bs-toggle="tooltip"
                                                data-bs-placement="right" title="Ubah TTL"></i>
                                        </a>

                                        <?php } ?>
                                        <!-- Modal -->
                                        <div class="modal fade" id="ttl" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="" method="post">
                                                            <div class="mb-3">
                                                                <div class="form-text mb-2">
                                                                    Data Yatim
                                                                </div>
                                                                <input type="hidden" name="id"
                                                                    value="<?= $dYatim["id"] ?>">
                                                                <input type="hidden" name="link"
                                                                    value="<?= $dYatim["nomor_id"] ?>">
                                                                <input type="text" class="form-control" name="nama"
                                                                    value="<?= ucwords($dYatim["nama_yatim"]) ?>"
                                                                    readonly>
                                                            </div>

                                                            <div class="mb-3">
                                                                <div id="disabledSelect" class="form-text mb-2">
                                                                    Tempat Lahir
                                                                </div>
                                                                <input type="text" class="form-control"
                                                                    name="tempatLahir" placeholder="tempat lahir yatim"
                                                                    value="<?= ucwords($dYatim["tempatLahir"]) ?>"
                                                                    style="text-transform: capitalize;"
                                                                    autocomplete="off" required
                                                                    oninvalid="this.setCustomValidity('Tempat lahir tidak boleh kosong')"
                                                                    oninput="this.setCustomValidity('')">

                                                            </div>

                                                            <div class="mb-3">
                                                                <div id="disabledSelect" class="form-text mb-2">
                                                                    Tanggal Lahir
                                                                </div>
                                                                <input type="date" class="form-control"
                                                                    name="tanggalLahir"
                                                                    placeholder="tanggal lahir yatim"
                                                                    value="<?= ucwords($dYatim["tgl_lahir"]) ?>"
                                                                    style="text-transform: capitalize;"
                                                                    autocomplete="off" required
                                                                    oninvalid="this.setCustomValidity('Tanggal lahir tidak boleh kosong')"
                                                                    oninput="this.setCustomValidity('')">

                                                            </div>

                                                            <div class="button">
                                                                <input type="submit" name="ubah_lahir"
                                                                    class="btn btn-primary w-100" value="Simpan Data">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 label">Nama Ibu</div>
                                    <div class="col-lg-8 col-md-8">
                                        <?php if ($dYatim["nama_ibu"] == "") { ?>
                                        Tidak Ada Info

                                        <?php } else { ?>
                                        <?= ucwords($dYatim["nama_ibu"]) ?>
                                        <?php } ?>

                                        <?php if ($_SESSION["id_pengurus"] == "kepala_program") { ?>
                                        <a href="" data-bs-toggle="modal" data-bs-target="#ibu">
                                            <i class="bi bi-pencil-square" data-bs-toggle="tooltip"
                                                data-bs-placement="right" title="Ubah Ibu"></i>
                                        </a>

                                        <?php } ?>
                                        <!-- Modal -->
                                        <div class="modal fade" id="ibu" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="" method="post">
                                                            <div class="mb-3">
                                                                <div class="form-text mb-2">
                                                                    Data Yatim
                                                                </div>
                                                                <input type="hidden" name="id"
                                                                    value="<?= $dYatim["id"] ?>">
                                                                <input type="hidden" name="link"
                                                                    value="<?= $dYatim["nomor_id"] ?>">
                                                                <input type="text" class="form-control" name="nama"
                                                                    value="<?= ucwords($dYatim["nama_yatim"]) ?>"
                                                                    readonly>
                                                            </div>

                                                            <div class="mb-3">
                                                                <div id="disabledSelect" class="form-text mb-2">
                                                                    Nama Ibu
                                                                </div>
                                                                <input type="text" class="form-control" name="namaIbu"
                                                                    placeholder="nama ibu yatim"
                                                                    value="<?= ucwords($dYatim["nama_ibu"]) ?>"
                                                                    style="text-transform: capitalize;"
                                                                    autocomplete="off">

                                                            </div>

                                                            <div class="button">
                                                                <input type="submit" name="ubah_ibu"
                                                                    class="btn btn-primary w-100" value="Simpan Data">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 label">Nama Ayah (Alm)</div>
                                    <div class="col-lg-8 col-md-8">
                                        <?php if ($dYatim["nama_ayah"] == "") { ?>
                                        Tidak Ada Info

                                        <?php } else { ?>
                                        <?= ucwords($dYatim["nama_ayah"]) ?> <b>(Alm)</b>
                                        <?php } ?>

                                        <?php if ($_SESSION["id_pengurus"] == "kepala_program") { ?>
                                        <a href="" data-bs-toggle="modal" data-bs-target="#ayah">
                                            <i class="bi bi-pencil-square" data-bs-toggle="tooltip"
                                                data-bs-placement="right" title="Ubah Ayah"></i>
                                        </a>

                                        <?php } ?>
                                        <!-- Modal -->
                                        <div class="modal fade" id="ayah" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="" method="post">
                                                            <div class="mb-3">
                                                                <div class="form-text mb-2">
                                                                    Data Yatim
                                                                </div>
                                                                <input type="hidden" name="id"
                                                                    value="<?= $dYatim["id"] ?>">
                                                                <input type="hidden" name="link"
                                                                    value="<?= $dYatim["nomor_id"] ?>">
                                                                <input type="text" class="form-control" name="nama"
                                                                    value="<?= ucwords($dYatim["nama_yatim"]) ?>"
                                                                    readonly>
                                                            </div>

                                                            <div class="mb-3">
                                                                <div id="disabledSelect" class="form-text mb-2">
                                                                    Nama Ayah (Alm)
                                                                </div>
                                                                <input type="text" class="form-control" name="namaAyah"
                                                                    placeholder="nama ayah yatim"
                                                                    value="<?= ucwords($dYatim["nama_ayah"]) ?>"
                                                                    style="text-transform: capitalize;"
                                                                    autocomplete="off">

                                                            </div>

                                                            <div class="button">
                                                                <input type="submit" name="ubah_ayah"
                                                                    class="btn btn-primary w-100" value="Simpan Data">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 label">Sekolah Asal</div>
                                    <div class="col-lg-8 col-md-8">
                                        <?php if ($dYatim["asal_sekolah"] == "") { ?>
                                        Tidak Ada Info

                                        <?php } else { ?>
                                        <?= ucwords($dYatim["asal_sekolah"]) ?>
                                        <?php } ?>

                                        <?php if ($_SESSION["id_pengurus"] == "kepala_program") { ?>
                                        <a href="" data-bs-toggle="modal" data-bs-target="#sekolah">
                                            <i class="bi bi-pencil-square" data-bs-toggle="tooltip"
                                                data-bs-placement="right" title="Ubah Sekolah"></i>
                                        </a>

                                        <?php } ?>

                                        <!-- Modal -->
                                        <div class="modal fade" id="sekolah" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Asal Sekolah</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="" method="post">
                                                            <div class="mb-3">
                                                                <div class="form-text mb-2">
                                                                    Data Yatim
                                                                </div>
                                                                <input type="hidden" name="id"
                                                                    value="<?= $dYatim["id"] ?>">
                                                                <input type="hidden" name="link"
                                                                    value="<?= $dYatim["nomor_id"] ?>">
                                                                <input type="text" class="form-control" name="nama"
                                                                    value="<?= ucwords($dYatim["nama_yatim"]) ?>"
                                                                    readonly>
                                                            </div>

                                                            <div class="mb-3">
                                                                <div id="disabledSelect" class="form-text mb-2">
                                                                    Nama Sekolah
                                                                </div>
                                                                <input type="text" class="form-control" name="sekolah"
                                                                    placeholder="sekolah yatim"
                                                                    value="<?= ucwords($dYatim["asal_sekolah"]) ?>"
                                                                    style="text-transform: capitalize;"
                                                                    autocomplete="off">

                                                            </div>

                                                            <div class="button">
                                                                <input type="submit" name="ubah_sekolah"
                                                                    class="btn btn-primary w-100" value="Simpan Data">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 label">Kelas</div>
                                    <div class="col-lg-8 col-md-8">
                                        <?php if ($dYatim["kelas"] == "") { ?>
                                        Tidak Ada Info

                                        <?php } else { ?>
                                        <?= ucwords($dYatim["kelas"]) ?>
                                        <?php } ?>

                                        <?php if ($_SESSION["id_pengurus"] == "kepala_program") { ?>
                                        <a href="" data-bs-toggle="modal" data-bs-target="#kelas">
                                            <i class="bi bi-pencil-square" data-bs-toggle="tooltip"
                                                data-bs-placement="right" title="Ubah Kelas"></i>
                                        </a>

                                        <?php } ?>
                                        <!-- Modal -->
                                        <div class="modal fade" id="kelas" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Kelas Yatim</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="" method="post">
                                                            <div class="mb-3">
                                                                <div class="form-text mb-2">
                                                                    Data Yatim
                                                                </div>
                                                                <input type="hidden" name="id"
                                                                    value="<?= $dYatim["id"] ?>">
                                                                <input type="hidden" name="link"
                                                                    value="<?= $dYatim["nomor_id"] ?>">
                                                                <input type="text" class="form-control" name="nama"
                                                                    value="<?= ucwords($dYatim["nama_yatim"]) ?>"
                                                                    readonly>
                                                            </div>

                                                            <div class="mb-3">
                                                                <div id="disabledSelect" class="form-text mb-2">
                                                                    Kelas
                                                                </div>
                                                                <input type="text" class="form-control" name="kelas"
                                                                    placeholder="kelas yatim"
                                                                    value="<?= ucwords($dYatim["kelas"]) ?>"
                                                                    style="text-transform: capitalize;"
                                                                    autocomplete="off">

                                                            </div>

                                                            <div class="button">
                                                                <input type="submit" name="ubah_kelas"
                                                                    class="btn btn-primary w-100" value="Simpan Data">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body pt-3">
                        <div class="card-body">
                            <h5 class="card-title">PERKEMBANGAN YATIM
                                <?php if ($_SESSION["id_pengurus"] == "guru") { ?>
                                <a href="" data-bs-toggle="modal" data-bs-target="#laporan">
                                    <i class="bi bi-pencil-square" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Tambah Laporan"></i>
                                </a>

                                <!-- Modal -->
                                <div class="modal fade" id="laporan" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Perkembangan Yatim</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="font-family: Open Sans, sans-serif;">
                                                <form action="" method="post" class="user">
                                                    <div class=" mb-3">
                                                        <div id="disabledSelect" class="form-text mb-2">
                                                            Nama Yatim
                                                        </div>
                                                        <input type="hidden" name="id" value="<?= $_SESSION["id"] ?>">
                                                        <input type="hidden" name="link"
                                                            value="<?= $_SESSION["id_pengurus"] ?>">
                                                        <input type="text" class="form-control"
                                                            style="text-transform: capitalize;" name="yatim"
                                                            value="<?= $dYatim["nama_yatim"] ?>" readonly>
                                                    </div>

                                                    <div class="mb-3">
                                                        <div id="disabledSelect" class="form-text mb-2">
                                                            Perkembangan
                                                        </div>
                                                        <input type="text" class="form-control" name="perkembangan"
                                                            placeholder="perkembangan yatim"
                                                            style="text-transform: capitalize;" autocomplete="off"
                                                            required
                                                            oninvalid="this.setCustomValidity('Nama yatim tidak boleh kosong')"
                                                            oninput="this.setCustomValidity('')">

                                                    </div>

                                                    <div class="button">
                                                        <input type="submit" name="inputLaporan"
                                                            class="btn btn-primary w-100" value="Laporkan">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Batal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </h5>


                            <div class="table-responsive">
                                <table id="tabel-database_laporan" class="table table-bordered">
                                    <thead>
                                        <tr style="text-align: center;">
                                            <th scope="col">No</th>
                                            <th scope="col">Guru</th>
                                            <th scope="col">Nama Yatim</th>
                                            <th scope="col">Perkembangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            while ($r = $q->fetch_assoc()) {
                                        ?>

                                        <tr>
                                            <td style="text-align: center;"><?= $no++ ?></td>
                                            <td><?= ucwords($r['guru']) ?></td>
                                            <td><?= ucwords($r['nama_yatim']) ?></td>
                                            <td><?= ucfirst($r['perkembangan']) ?></td>
                                        </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>