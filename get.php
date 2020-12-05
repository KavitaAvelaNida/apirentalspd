<?php
	$kodesepeda = $_POST['kodesepeda'];
    $merk = $_POST['merk'];
    $warna = $_POST['warna'];
    $hargasewa = $_POST['hargasewa'];
	$jenis = $_POST['jenis'];

   // $gambar = $_FILES['gambar']['name'];
	$jenis = $_POST['jenis'];
 //   $image_url = $_FILES['gambar']['tmp_name'];
	
 //   move_uploaded_file($image_url, 'upload/' .$gambar);

	$con = mysqli_connect("localhost","root","","apispd");
	$sql = "INSERT INTO tbsepeda (kodesepeda , merk , warna , jenis, hargasewa ) VALUES ('$kodesepeda', '$merk', '$warna', '$jenis' , '$hargasewa' )  ";
	$json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]="sukses";
	}else{
		$json["hasil"]["respon"]="gagal";
	}
	echo json_encode($json);
?>