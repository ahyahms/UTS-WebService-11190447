<?php
    $servername ="localhost";
    $username ="root";
    $password ="";
    $databasename ="data";

    $conn = mysqli_connect($servername, $username, $password, $databasename);
    if(!$conn)
    {
        die("Koneksi Tidak Berhasil");
    }
?>