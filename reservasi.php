<?php
    include 'koneksi.php';

    session_start();

    $name = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $dokter = $_POST['dokter'];
    $gender = $_POST['gender'];
    $usia = $_POST['usia'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO janji_temu(nama, usia, tanggal, waktu, dokter, gender, alamat) VALUES('$name', '$usia', '$tanggal', '$waktu', '$dokter', '$gender', '$alamat')";

    if(mysqli_query($conn, $sql)){
        echo "Data berhasil ditambahkan <br>";
    }else{
        echo "Data gagal ditambahkan<br>";
    }

    header("Location: halamanReservasi.php");

?>