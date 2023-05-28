<?php
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login_pasien WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($conn, $sql);

    $cek = mysqli_num_rows($result);

    if($cek > 0){
        $data = mysqli_fetch_assoc($result);

        if($data['level']=="pasien"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "pasien";

            header("location:homePasien.php");
        }else if($data['level']=="admin"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";

            header("location:homeDokter.php");
        }else{
            header("location:formLogin.php?pesan=gagal");
        }
    }else{
        header("location:formLogin.php?pesan=gagal");
    }
?>