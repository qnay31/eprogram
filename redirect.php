<?php 

error_reporting(0);

require "function.php";
$date   = date("Y-m-d H:i:s");
$ip     = get_client_ip();

$page   = $_GET["toAction"];
$user   = $_GET["user"];

if ($page == true && $user == "ketua_yayasan") {
    $result = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id_pengurus = '$user' " );

    if (mysqli_num_rows($result) === 1 ) {
        $row = mysqli_fetch_assoc($result);
        // set session

        if($user == "ketua_yayasan"){
            $_SESSION["halaman_utama"]      = true ;
            
            // buat session login dan username ADMIN
            $_SESSION["id"]           = $row["id"];
            $_SESSION["id_pengurus"]  = $row["id_pengurus"];
            $_SESSION["nama"]         = $row["nama"];
            $_SESSION["cabang"]       = $row["cabang"];
            $_SESSION["username"]     = $row["username"];
            $_SESSION["profil"]       = $row["profil"];
            $_SESSION["password"]     = $row["password"];
            $_SESSION["posisi"]       = $row["posisi"];

            // die(var_dump($data));

            mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date', '$_SESSION[nama] Telah Login Halaman $_SESSION[posisi]')");
            header("Location: admin/$_SESSION[username].php");

        }

    }
} elseif ($page == true && $user == "kepala_cabang") {
    $result = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id_pengurus = '$user' " );

    if (mysqli_num_rows($result) === 1 ) {
        $row = mysqli_fetch_assoc($result);
        // set session

        if($user == "kepala_cabang"){
            $_SESSION["halaman_utama"]      = true ;
            
            // buat session login dan username ADMIN
            $_SESSION["id"]           = $row["id"];
            $_SESSION["id_pengurus"]  = $row["id_pengurus"];
            $_SESSION["nama"]         = $row["nama"];
            $_SESSION["cabang"]       = $row["cabang"];
            $_SESSION["username"]     = $row["username"];
            $_SESSION["profil"]       = $row["profil"];
            $_SESSION["password"]     = $row["password"];
            $_SESSION["posisi"]       = $row["posisi"];

            // die(var_dump($data));

            mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date', '$_SESSION[nama] Telah Login Halaman $_SESSION[posisi]')");
            header("Location: admin/$_SESSION[username].php");

        }

    }

} else {
    header("Location: index.php?pesan=gagal");
    exit;
}


?>