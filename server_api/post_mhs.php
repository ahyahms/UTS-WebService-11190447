  
<?php
    //Koneksi ke database mysql
    include "conn.php";

    //menambahkan variabel post mahasiswa
    $id = isset($_POST["id"]) ? $_POST["id"] : "";
    $nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $nim = isset($_POST ["nim"]) ? $_POST ["nim"] : "";
    $jurusan = isset($_POST ["jurusan"]) ? $_POST ["jurusan"] : "";
    $asal = isset($_POST ["asal"]) ? $_POST ["asal"] : "";
    
    //Query menambahkan data mahasiswa
    $sql = "INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `jurusan`, `asal`) VALUES ('".$id."', '".$nama."', '".$nim."', '".$jurusan."', '".$asal."')";
    //echo   $sql;

    //Running query
    $query = mysqli_query($conn, $sql);
    if($query)
    {
        $msg = "SIMPAN DATA MAHASISWA BERHASIL";
    }
    else
    {
        $msg = "MAAF!!SIMPAN DATA MAHASISWA GAGAL";
    }

    $response = array(
        'status'=>'OK',
        'msg' =>$msg
    );
    
    echo json_encode($response);
?>