<?php
	$con = mysqli_connect("localhost","root","","apispd");

	$sql = "SELECT * from tbuser where role_user > 1";
	$i=0;
		$json["result"]=array();
		$result=mysqli_query($con,$sql);
		while($row = mysqli_fetch_assoc($result)){
				$arr_result=$row;
				array_push($json["result"],$arr_result);
			}
			mysqli_close($con);
			echo json_encode($json);	
?>