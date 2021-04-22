<?php
    //koneksi ke database mysql
    include "conn.php";

    //Membuat query/sql untuk mengambil seluruh data mahasiswa
    $sql = "SELECT * FROM mahasiswa";
    $query = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_array($query))
    {
        //echo $data["nama_mahasiswa"]." ";

        $item[] = array
        (
            'id'=>$data["id"],
            'nama'=>$data["nama"],
            'nim'=>$data["nim"],
            'jurusan'=>$data["jurusan"],
            'asal'=>$data["asal"],
        );
    }

$response = array
(
    'status'=>'OK',
    'data' =>$item
);

echo json_encode($response);
?>