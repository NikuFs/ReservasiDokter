<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
    <div class="center">
        <h1>LOGIN</h1>
        <form action="login.php" method="POST">
            <div class="txt_field">
                <input type="text" name="username" required>
                <span></span>
                <label>Username</label>
            </div>

            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>

            <input type="submit" name="submit" value="Login">

            <div class="signup_link">
                <a href="formRegister.php">Belum punya akun?</a>
            </div>
        </form>
    </div>
    </body>
</html>