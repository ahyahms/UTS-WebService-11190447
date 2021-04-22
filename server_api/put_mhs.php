<?php
	//include koneksi ke database
	include "conn.php";

	//echo "update";

	//menangkap variabel parameter get
	$id = isset($_PUT["id"]);
	//echo $id;

	//bagian ini yang akan/ingin di ubah
	$nama = isset($_PUT["nama"]);
	

	$sql = "UPDATE `` SET `nama` = '".$nama."'
	WHERE `mahasiswa`.`id` = ".$id.";";
	//echo $sql;

		//running Query
		$query = mysqli_query($conn, $sql);
		if($query)
        {
			$msg = "Update data mahasiswa BERHASIL";
		}
        else
        {
			$msg = "Update data mahasiswa GAGAL";
		}

		$response = array(
		'status' =>'Ok',
		'msg'=>$msg
		);

		echo json_encode($response);
?>