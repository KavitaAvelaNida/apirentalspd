<?php
	$email = $_POST['email'];
	$password = $_POST['password'];
	$con = mysqli_connect("localhost","root","","apispd");
	$sql = "select * from tbuser where email = '$email' and password = '$password' and role_user = 1";
	$json["hasil"]=array();
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count > 0) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>