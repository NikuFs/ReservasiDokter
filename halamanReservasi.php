<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Halaman Reservasi</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="center">
            <h1>Reservasi</h1>
            <form action="reservasi.php" method="post">
                <div class="txt_field">
                    <input type="text" name="nama" required>
                    <span></span>
                    <label>Nama</label>
                </div>
                
                <div class="txt_field">
                    <input type="date" name="tanggal" required>
                    <span></span>
                </div>
                
                <div class="txt_field">
                    <input type="time" name="waktu" required>
                    <span></span>
                </div>
                
                <div class="txt_field">
                    <input type="text" name="dokter" required>
                    <span></span>
                    <label>Dokter</label>
                </div>
                
                <input type="submit" name="submit" value="Tambah">
            </form>

            <form action="homePasien.php">
                <input type="submit" name="submit" value="Back">
        </form>
        </div>
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
