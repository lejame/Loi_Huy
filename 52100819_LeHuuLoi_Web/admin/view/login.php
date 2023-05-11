<?php
   session_start();
   ob_start();
   include "../model/connect.php";
   include "../model/user.php";

   if((isset($_POST['login'])) && ($_POST['login'])){
        $user = $_POST['logEmail'];
        $pass = $_POST['logPassword'];
        $role = checkuser($user,$pass);
        $_SESSION["role"] = $role;
        if($role == 1) header('location: admin.php');
        else if($role == 0) header('location: home.html');
        else{
            $txt_error = "check Username and Password !";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
    <style>
        body {
            background-image: url('image/img_login2.jpg');
            background-size: cover;
        }
    </style>
</head>

<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="container">
            <div class="box">
                <!------------------ Login Box --------------------->
                <div class="box-login" id="login">
                    <i class="fas fa-times fa-right fa-lg" id="next"><a href="home.html"></a></i>
                    <div class="top-header">
                        <h3>Welcome</h3>
                        <small>We are happy to have you back.</small>
                    </div>
                    <div class="input-group">
                        <div class="input-field">
                            <input type="text" class="input-box" id="logEmail" name="logEmail" required>
                            <label for="logEmail">Email address</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input-box" id="logPassword" name="logPassword" required>
                            <label for="logPassword">Password</label>
                            <div class="eye-area">
                                <div class="eye-box" onclick="myLogPassword()">
                                    <i class="fa-regular fa-eye" id="eye"></i>
                                    <i class="fa-regular fa-eye-slash" id="eye-slash"></i>
                                </div>
                            </div>
                        </div>
                        <div class="remember">
                            <input type="checkbox" id="formCheck" class="check">
                            <label for="formCheck"> Remember Me</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="input-submit" value="Sign In" name="login">
                        </div>
                        <?php 
                            if(isset($txt_error) &&($txt_error!="")){
                                echo "<font color='black'>".$txt_error."</font>";
                            }
                        ?>
                        <div class="forgot">
                            <a href="#">Forgot password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>    
    <script>
        // view password codes

        function myLogPassword() {
            var a = document.getElementById('logPassword');
            var b = document.getElementById('eye');
            var c = document.getElementById('eye-slash');
            if (a.type === "password") {
                a.type = "text"
                b.style.opacity = "0";
                c.style.opacity = "1";
            } else {
                a.type = "password"
                b.style.opacity = "1";
                c.style.opacity = "0";
            }
        }
    </script>
</body>

</html>