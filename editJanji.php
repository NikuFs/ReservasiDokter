<?php
        include 'koneksi.php';

        $name = $_POST['nama'];
        $tanggal = $_POST['tanggal'];
        $waktu = $_POST['waktu'];
        $dokter = $_POST['dokter'];

        var_dump($_POST);
        $query = "UPDATE janji_temu SET nama = '$name', tanggal = '$tanggal', waktu = '$waktu', dokter = '$dokter' where id = $_POST[id]";
        echo $query;
        $sql = mysqli_query($conn, $query);

        header("Location: crudReservasi.php");
?>