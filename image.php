<?php
	$id = $_POST['id'];
    $image = $_FILES['image']['name'];
    $asal = $_FILES['image']['tmp_name'];

    move_uploaded_file($asal, 'upload/'.$image);

	$con = mysqli_connect("localhost","root","","apispd");
	
	$sql = "UPDATE tbsepeda SET image='$image' WHERE id = '$id'";
    if($con->query($sql) === TRUE) {
		$json["respon"]=true;
	}else{
		$json["respon"]=false;
	}
	echo json_encode($json);
?>