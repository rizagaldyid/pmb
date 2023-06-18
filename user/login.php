
<?php
session_start();
 error_reporting(1);
if ($_SESSION['status'] == 'login'){
    header('Location:form-tambah.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <span class="background"></span>
    <span class="centering">
        <form class="my-form" action="proses-login-user.php" method="post">
        <span class="login-welcome-row">
                    <img
                        class="login-welcome"
                        src="astronaut.jpg"
                    />
                    <!-- optimize the image in production -->
                    <h1>LogIn User!</h1>
                </span>
        <table>
        <div class="text-field">
            <label for="email">Email:</label>
            <input
                        aria-label="Email"
                        type="text"
                        id=""
                        name="username"
                        placeholder="Nama Akun"
                        required
                       
                    >
                    
                    </div>
                <div class="text-field">
                    <label >Password:</label>
                    <input
                        id="password"
                        type="password"
                        aria-label="Password"
                        name="password"
                        placeholder="Password kamu"
                        required
                    >
                   
                    
                </div>
                <input type="submit" class="my-form__button" value="Login" />
                <div class="my-form__actions">
                <div class="my-form__row">
                        <span>Apakah kamu lupa password?</span>
                        <a href="#" title="Reset Password">Buat akun</a>
                    </div>
                    <div class="my-form__signup">
                        <a href="#" title="Create Account">Create Account</a>
                    </div>
                </div>
            </form>
        </span>
    <!-- <script src="script.js"></script> -->
</body>
           
</html>