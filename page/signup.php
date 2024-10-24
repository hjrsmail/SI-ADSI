<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="SignUp.css">
        <title>Daftar/SignUp</title>
    </head>
    <body>
    <?php

        $process = isset($_GET['process']) ? ($_GET['process']) : false;

        ?>

        <?php if ($process == 'failed') : ?>
            <div class="alert alert-danger" role="alert">
                Semua formulir harus diisi
            </div>
        <?php endif; ?>

        <div class="navbar">
            <h2>FORM REGISTER</h2>
        </div>

        <div class="container">
            <div class="form-container">
              <form class="form-login" method="post" action="http://localhost/websiteadsi/process/process_signup.php">
                    <div class="form-group">
                        <input type="text" id="email" name="email">
                        <label>Email Address</label>
                    </div>
                    <div class="form-group">
                        <input type="text" id="username" name="username">
                        <label>Username</label>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name="password">
                        <label>Password</label>
                    </div>
                    <button input type="submit">Daftar</button>  
                    
                    <div class="signup">
                        <p>Sudah Punya Akun? <a href="http://localhost/websiteadsi/page/signin.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
