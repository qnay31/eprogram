<?php 
session_start();

error_reporting(0);
require '../../function.php';

$unik     = $_GET["id_unik"];

$query  = mysqli_query($conn, "SELECT * FROM data_yatim WHERE id = '$unik'");
$data   = mysqli_fetch_assoc($query);
$nama   = $data["nama_yatim"];
// die(var_dump($akun2));
$query2 = mysqli_query($conn, "DELETE FROM `data_yatim` WHERE id = '$unik' ");
$query3 = mysqli_query($conn, "DELETE FROM `perkembangan_yatim` WHERE nama_yatim = '$nama' ");


if ($query2 == true && $query3 == true) {
    echo "<script>
    alert('Data Berhasil Dihapus');
    document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=dataYatim';
    </script>";
}  else {
    echo "<script>
    alert('Data Tidak Berhasil Dihapus');
    document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=dataYatim';
    </script>";
}




?>