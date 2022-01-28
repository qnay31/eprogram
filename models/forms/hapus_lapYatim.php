<?php 
session_start();

error_reporting(0);
require '../../function.php';

$unik           = $_GET["id_unik"];
$query          = mysqli_query($conn, "SELECT * FROM perkembangan_yatim WHERE id = '$unik' ");
$data           = mysqli_fetch_assoc($query);
$nama_yatim     = $data["nama_yatim"];
$perkembangan   = $data["perkembangan"];
$ip             = get_client_ip();
$date           = date("Y-m-d H:i:s");

$query3 = mysqli_query($conn, "DELETE FROM `perkembangan_yatim` WHERE id = '$unik'");

// die(var_dump($query3));
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Menghapus Laporan perkembangan yatim dengan bernama $nama_yatim')");

if ($query3 == true) {
    echo "<script>
    alert('Data Berhasil Dihapus');
    document.location.href = '../../admin/$_SESSION[username].php?id_forms=forms_laporan';
    </script>";
} else {
    echo "<script>
    alert('Data Tidak Berhasil Dihapus');
    document.location.href = '../../admin/$_SESSION[username].php?id_forms=forms_laporan';
    </script>";
}

?>