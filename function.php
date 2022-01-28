<?php

date_default_timezone_set('Asia/Jakarta');
$conn = mysqli_connect("localhost", "root", "", "program");

// ip
function get_client_ip()
{
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if (getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if (getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if (getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if (getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if (getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function convertDateDBtoIndo($string)
{
    // contoh : 2019-01-30

    $bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

    $tanggal 	= explode("-", $string)[2];
    $bulan 		= explode("-", $string)[1];
    $tahun 		= explode("-", $string)[0];

    return $tanggal . " " . $bulanIndo[abs($bulan)] . " " . $tahun;
}

function RemoveSpecialChar($nom_acak)
{

    // Using str_replace() function 
    // to replace the word 
    $res = str_replace(array("#", "."), ' ', $nom_acak);


    // Returning the result 
    return $res;
}

function input_pengurus($data)
{
    global $conn;

    $ambil_nama     = htmlspecialchars($data["nama"]);
    $nama     		= ucwords($data["nama"]);
    $id_pengurus    = $data["id"];
    $cabang    		= $data["cabang"];
    $posisi    		= $data["program"];
    $username     	= htmlspecialchars($data["username"]);
    $password		= mysqli_real_escape_string($conn, $data["password"]);
    $password2		= mysqli_real_escape_string($conn, $data["password2"]);
    $ip     		= get_client_ip();
    $date   		= date("Y-m-d H:i:s");
    $pukul   		= date("H:i:s");

    // die(var_dump($anggaran));

    // cek nama
    $query = mysqli_query($conn, "SELECT nama FROM akun_pengurus WHERE nama = '$nama' ");

    if (mysqli_fetch_assoc($query)) {

        echo "<script>
            alert('Nama Sudah Terdaftar');
        </script>";

        return false;
    }

    // cek username
    $query2 = mysqli_query($conn, "SELECT username FROM akun_pengurus WHERE username = '$username' ");

    if (mysqli_fetch_assoc($query2)) {

        echo "<script>
            alert('Username Sudah Terdaftar');
        </script>";

        return false;
    }

    // cek password
    if ($password !== $password2) {

        echo "<script>
            alert('Konfirmasi Password Tidak Sama');
        </script>";

        return false;
    }

    // enkripsi Password 

    $passwor_enc = password_hash($password, PASSWORD_DEFAULT);

    // link pengurus
    $halaman    = "<?php include '../homepage.php' ?>";
$link_pengurus = $username . ".php";

$file = fopen("admin/" . $link_pengurus, "w");
echo fwrite($file, $halaman);


// input data ke database
$result = mysqli_query($conn, "INSERT INTO akun_pengurus VALUES('', '$id_pengurus', '$nama', '$cabang', '$username',
'$passwor_enc', 'profil.png', '$posisi')");

$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$nama', '$posisi', '$ip',
'$date', '$nama Telah Membuat Akun Baru $posisi')");

// die(var_dump($result));
return mysqli_affected_rows($conn);

}

// tambah yatim
function tambah_yatim($data)
{
global $conn;

$id_pengurus = $data["link"];
$id = htmlspecialchars($data["id"]);
$nama = ucwords($data["nama"]);
$posisi = $data["posisi"];
$nameYatim = htmlspecialchars($data["nameYatim"]);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");
$pukul = date("H:i:s");

// die(var_dump($anggaran));

// cek nama
$query = mysqli_query($conn, "SELECT nama_yatim FROM data_yatim WHERE nama_yatim = '$nameYatim' ");

if (mysqli_fetch_assoc($query)) {

echo "<script>
alert('Nama Yatim Sudah Terdaftar');
</script>";

return false;
}

// input data ke database
$result = mysqli_query($conn, "INSERT INTO data_yatim VALUES('', '$id', '$id_pengurus', '$posisi', '$_SESSION[cabang]',
'$nama', '$nameYatim', '', '', '', '', '', '', '', '')");

$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$nama', '$posisi', '$ip',
'$date', '$nama sebagai $posisi telah mendaftarkan anak yatim terbaru dengan nama $nameYatim')");

// die(var_dump($result));
return mysqli_affected_rows($conn);

}

// tambah perkembangan yatim
function perkembanganYatim($data)
{
global $conn;

$id_pengurus = $data["link"];
$id = htmlspecialchars($data["id"]);
$yatim = htmlspecialchars($data["yatim"]);
$perkembangan = htmlspecialchars(mysqli_real_escape_string($conn, $data["perkembangan"]));
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");
$pukul = date("H:i:s");

// die(var_dump($anggaran));

// cek perkembangan
$query = mysqli_query($conn, "SELECT perkembangan FROM perkembangan_yatim WHERE perkembangan = '$perkembangan' AND
nama_yatim = '$yatim' ");

if (mysqli_fetch_assoc($query)) {

echo "<script>
alert('Perembangan ini sebelumnya sudah dilaporkan');
</script>";

return false;
}

// input data ke database
$result = mysqli_query($conn, "INSERT INTO perkembangan_yatim VALUES('', '$id', '$id_pengurus', '$_SESSION[nama]',
'$yatim', '$_SESSION[cabang]', '$perkembangan')");


// die(var_dump($result));

mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date',
'$_SESSION[nama] sebagai $_SESSION[posisi] telah melaporkan perkembangan anak yatim terbaru yang bernama $yatim')");

// die(var_dump($result));
return mysqli_affected_rows($conn);

}

// edit perkembangan yatim
function edit_lapYatim($data)
{
global $conn;

$id = htmlspecialchars($data["id"]);
$yatim = htmlspecialchars($data["yatim"]);
$perkembangan = htmlspecialchars(mysqli_real_escape_string($conn, $data["perkembangan"]));
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");
$pukul = date("H:i:s");

// die(var_dump($anggaran));

// cek perkembangan
$query = mysqli_query($conn, "SELECT perkembangan FROM perkembangan_yatim WHERE perkembangan = '$perkembangan' AND
nama_yatim = '$yatim' ");

if (mysqli_fetch_assoc($query)) {

echo "<script>
alert('Perembangan ini sudah ada');
</script>";

return false;
}

// update perkembangan
$update = mysqli_query($conn, "UPDATE `perkembangan_yatim` SET
`perkembangan` ='$perkembangan'
WHERE id = '$id' ");


// die(var_dump($result));

mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date',
'$_SESSION[nama] sebagai $_SESSION[posisi] telah mengubah perkembangan anak yatim terbaru yang bernama $yatim')");

// die(var_dump($result));
return mysqli_affected_rows($conn);

}

// edit nama lengkap
function ubah_nama($data)
{
global $conn;

$id = htmlspecialchars($data["id"]);
$yatim = htmlspecialchars($data["nama"]);
$namaNew = htmlspecialchars(mysqli_real_escape_string($conn, $data["namaNew"]));
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");
$pukul = date("H:i:s");

$query = mysqli_query($conn, "SELECT nama_yatim FROM data_yatim WHERE nama_yatim = '$namaNew' ");

if (mysqli_fetch_assoc($query)) {

echo "<script>
alert('Nama yatim ini sudah ada');
</script>";

return false;
}

// update
$update = mysqli_query($conn, "UPDATE `data_yatim` SET
`nama_yatim` ='$namaNew'
WHERE id = '$id' ");

$update2 = mysqli_query($conn, "UPDATE `perkembangan_yatim` SET
`nama_yatim` ='$namaNew'
WHERE nama_yatim = '$yatim' ");

// die(var_dump($result));

mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date',
'$_SESSION[nama] sebagai $_SESSION[posisi] telah mengubah nama lengkap anak yatim $yatim yatim menjadi $namaNew')");

// die(var_dump($result));
return mysqli_affected_rows($conn);

}

// edit alamat yatim
function ubah_alamat($data)
{
global $conn;

$id = htmlspecialchars($data["id"]);
$yatim = htmlspecialchars($data["nama"]);
$alamat = htmlspecialchars(mysqli_real_escape_string($conn, $data["alamat"]));
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");
$pukul = date("H:i:s");

// update perkembangan
$update = mysqli_query($conn, "UPDATE `data_yatim` SET
`alamat` ='$alamat'
WHERE id = '$id' ");

// die(var_dump($result));

mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date',
'$_SESSION[nama] sebagai $_SESSION[posisi] telah mengubah alamat anak $yatim yatim menjadi $alamat')");

// die(var_dump($result));
return mysqli_affected_rows($conn);

}

// edit tempat lahir
function ubah_lahir($data)
{
global $conn;

$id = htmlspecialchars($data["id"]);
$yatim = htmlspecialchars($data["nama"]);
$tempatLahir = htmlspecialchars(mysqli_real_escape_string($conn, $data["tempatLahir"]));
$tanggalLahir = htmlspecialchars($data["tanggalLahir"]);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");
$pukul = date("H:i:s");

// update perkembangan
$update = mysqli_query($conn, "UPDATE `data_yatim` SET
`tempatLahir` ='$tempatLahir',
`tgl_lahir` = '$tanggalLahir'
WHERE id = '$id' ");

// die(var_dump($result));

mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date',
'$_SESSION[nama] sebagai $_SESSION[posisi] telah mengubah tempat serta tanggal kelahiran anak $yatim yatim menjadi
$lahir')");

// die(var_dump($result));
return mysqli_affected_rows($conn);

}

// edit nama ibu
function ubah_ibu($data)
{
global $conn;

$id = htmlspecialchars($data["id"]);
$yatim = htmlspecialchars($data["nama"]);
$namaIbu = htmlspecialchars(mysqli_real_escape_string($conn, $data["namaIbu"]));
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");
$pukul = date("H:i:s");

// update perkembangan
$update = mysqli_query($conn, "UPDATE `data_yatim` SET
`nama_ibu` ='$namaIbu'
WHERE id = '$id' ");

// die(var_dump($result));

mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date',
'$_SESSION[nama] sebagai $_SESSION[posisi] telah mengubah nama ibu dari anak $yatim yatim menjadi $namaIbu')");

// die(var_dump($result));
return mysqli_affected_rows($conn);

}

// edit nama ayah
function ubah_ayah($data)
{
global $conn;

$id = htmlspecialchars($data["id"]);
$yatim = htmlspecialchars($data["nama"]);
$namaAyah = htmlspecialchars(mysqli_real_escape_string($conn, $data["namaAyah"]));
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");
$pukul = date("H:i:s");

// update perkembangan
$update = mysqli_query($conn, "UPDATE `data_yatim` SET
`nama_ayah` ='$namaAyah'
WHERE id = '$id' ");

// die(var_dump($result));

mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date',
'$_SESSION[nama] sebagai $_SESSION[posisi] telah mengubah nama ayah dari anak $yatim yatim menjadi $namaAyah')");

// die(var_dump($result));
return mysqli_affected_rows($conn);

}

// ubah asal sekolah
function ubah_sekolah($data)
{
global $conn;

$id = htmlspecialchars($data["id"]);
$yatim = htmlspecialchars($data["nama"]);
$sekolah = htmlspecialchars(mysqli_real_escape_string($conn, $data["sekolah"]));
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");
$pukul = date("H:i:s");

// update perkembangan
$update = mysqli_query($conn, "UPDATE `data_yatim` SET
`asal_sekolah` ='$sekolah'
WHERE id = '$id' ");

// die(var_dump($result));

mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date',
'$_SESSION[nama] sebagai $_SESSION[posisi] telah mengubah asal sekolah dari anak $yatim yatim menjadi
$sekolah')");

// die(var_dump($result));
return mysqli_affected_rows($conn);

}

// edit kelas
function ubah_kelas($data)
{
global $conn;

$id = htmlspecialchars($data["id"]);
$yatim = htmlspecialchars($data["nama"]);
$kelas = htmlspecialchars(mysqli_real_escape_string($conn, $data["kelas"]));
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");
$pukul = date("H:i:s");

// update perkembangan
$update = mysqli_query($conn, "UPDATE `data_yatim` SET
`kelas` ='$kelas'
WHERE id = '$id' ");

// die(var_dump($result));

mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date',
'$_SESSION[nama] sebagai $_SESSION[posisi] telah mengubah kelas dari anak $yatim yatim menjadi $kelas')");

// die(var_dump($result));
return mysqli_affected_rows($conn);

}

// edit Profil
function edit_profil($data)
{
global $conn;

$id = htmlspecialchars($data["key"]);
$nama = htmlspecialchars($data["nama"]);
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");

$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip',
'$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Mengganti nama lengkapnya')");

if ($_SESSION["id_pengurus"] == "guru") {
mysqli_query($conn, "UPDATE `perkembangan_yatim` SET
`guru` ='$nama'
WHERE nomor_id = '$id' ");

// update_target
mysqli_query($conn, "UPDATE `akun_pengurus` SET
`nama` ='$nama'
WHERE id = '$id' ");

} else {
mysqli_query($conn, "UPDATE `data_yatim` SET
`guru` ='$nama'
WHERE nomor_id = '$id' ");
// update_target
mysqli_query($conn, "UPDATE `akun_pengurus` SET
`nama` ='$nama'
WHERE id = '$id' ");
}

// die(var_dump($result));
return mysqli_affected_rows($conn);
}

?>