<?php 
session_start();

error_reporting(0);
require '../function.php';

$unik           = $_GET["id_unik"];
$query          = mysqli_query($conn, "SELECT * FROM foto_yatim WHERE nomor_id = '$unik' ");
$data           = mysqli_fetch_assoc($query);
$foto           = $data["foto"];
$ip             = get_client_ip();
$date           = date("Y-m-d H:i:s");

unlink("../assets/img/profile/".$foto);
$query3 = mysqli_query($conn, "DELETE FROM `foto_yatim` WHERE nomor_id = '$unik'");


if ($query3 == true) {
    echo "<script>
    alert('Foto profil berhasil dihapus');
    document.location.href = '../admin/$_SESSION[username].php?id_akun=$unik';
    </script>";
} else {
    echo "<script>
    alert('Foto profil Tidak berhasil dihapus');
    document.location.href = '../admin/$_SESSION[username].php?id_akun=$unik';
    </script>";
}

?>