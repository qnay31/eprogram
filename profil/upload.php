<?php
session_start();
require '../function.php';

//upload.php

$folderPath = '../assets/img/profile/';

if(isset($_POST["image"]))
{
	// die(var_dump($id));
	$data = $_POST["image"];

	$image_array_1 = explode(";", $data);

	$image_array_2 = explode(",", $image_array_1[1]);

	$data = base64_decode($image_array_2[1]);

	$name = time() . '.png';

	$imageName = $folderPath . $name;

	$query 	= mysqli_query($conn, "SELECT * FROM foto_yatim WHERE nomor_id = '$_SESSION[id_yatim]'");
	$nums 	= $query->num_rows;
	$qData 	= mysqli_fetch_assoc($query);
	$foto 	= $qData["foto"];

	if ($nums === 1) {
		unlink("../assets/img/profile/".$foto);

		$update = mysqli_query($conn, "UPDATE foto_yatim SET
				`foto` = '$name'
				WHERE nomor_id = '$_SESSION[id_yatim]'");

	} else {
		$input 	= mysqli_query($conn, "INSERT INTO foto_yatim VALUES('', '$_SESSION[id_yatim]', '$name')");;
	}
	
	file_put_contents($imageName, $data);

	echo $imageName;

}

?>