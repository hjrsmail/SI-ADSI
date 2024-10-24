<?php

$process = isset($_GET['process']) ? ($_GET['process']) : false;

?>

<?php if ($process == 'failed') : ?>
    <div class="alert alert-danger" role="alert">
        Semua formulir harus diisi
    </div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="SignIn.css">
        <script language="JavaScript" src="SignIn.js"></script>

    </head>
    <body>
        <div class="navbar">
            <h2>FORM LOGIN</h2>
        </div>

        <div class="container">
            <div class="form-container">
              <form class="form-login" method="post" action="http://localhost/websiteadsi/process/process_signin.php">
                    <div class="form-group">
                        <input type="text" id="username" name="username">
                        <label>Email/Username</label>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name="password">
                        <label>Password</label>
                        <span class="toggle-password" onclick="togglePassword()">Show/Hide Password</span>
                    </div>
                    <button type="submit">Masuk</button>

                    <div class="signup">
                        <p>Belum Punya Akun? <a href="http://localhost/websiteadsi/page/signup.php">Buat Baru</a></p>
                    </div>
        
                </form>
            </div>
        </div>
    </body>
</html>
