<?php
    include 'koneksi.php';

    session_start();

    $name = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $dokter = $_POST['dokter'];

    $sql = "INSERT INTO janji_temu(nama, tanggal, waktu, dokter) VALUES('$name', '$tanggal', '$waktu', '$dokter')";

    if(mysqli_query($conn, $sql)){
        echo "Data berhasil ditambahkan <br>";
    }else{
        echo "Data gagal ditambahkan<br>";
    }

    header("Location: halamanReservasi.php");

?>