<?php
	include "conn.php";
	//menangkap variabel parameter get
	$id = isset($_DELETE["id"]);
	//echo $id;

	$sql = " DELETE FROM mahasiswa WHERE `id` = ".$id.";";
	//echo $sql;
	//running Query
	$query = mysqli_query($conn, $sql);
	if($query)
    {
		$msg = "DELET DATA MAHASISWA BERHASIL";
	}
    else
    {
		$msg = "DELET DATA MAHASISWA GAGAL";
	}

	//echo $msg;
	//echo 'test';
	$response = array(
		'status' =>'Ok',
		'msg'=>$msg
	);

	echo json_encode($response);
?>