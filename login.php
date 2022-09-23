<!DOCTYPE html>
<html lang="en">
<?php
   include("conn.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = $_POST['username'];
      $mypassword = password_hash($_POST['password'], PASSWORD_DEFAULT );
      
      $sql = "SELECT * FROM user WHERE username = '$myusername'";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        if(password_verify($_POST['password'], $row['password'])) {
            $_SESSION['login_user'] = $myusername;
            header("location: dashboard.php");
        } else {
            $error = "Your Login Name or Password is invalid";
        }
        } else {
            $error = "Username / Password salah";
        }
   }
   else {
       if(isset($_SESSION['login_user'])) {
          header("location: dashboard.php");
       }
   }
?>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="assets/landingPage/favicon/favicon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="assets/dashboard/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands", "simple-line-icons"
                ],
                urls: ['assets/dashboard/css/fonts.min.css']
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });

    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/dashboard/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/dashboard/css/atlantis.css">
</head>

<body class="login">
    <div class="wrapper wrapper-login shadow-lg">
        <div class="container container-login animated fadeIn">
            <h3 class="text-center">Login</h3>
            <?php
            global $error; 
            if($error) :
            ?>
            <div class="alert alert-danger">
                <?=$error;?>
            </div>
            <?php
            endif;
            ?>
            <form method="POST">
                <div class="login-form">
                    <div class="form-group form-floating-label">
                        <input id="username" name="username" type="text" class="form-control input-border-bottom"
                            required>
                        <label for="username" class="placeholder">Nama Pengguna</label>
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="password" name="password" type="password" class="form-control input-border-bottom"
                            required>
                        <label for="password" class="placeholder">Kata Sandi</label>
                        <div class="show-password">
                            <i class="icon-eye"></i>
                        </div>
                    </div>
                    <div class="form-action mb-3 col-lg-12">
                        <button type="submit" class="btn col-lg-12" style="background: #9789F2; color: white;"><i class="fas fa-sign-in-alt"></i> Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/dashboard/js/core/jquery.3.2.1.min.js"></script>
    <script src="assets/dashboard/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="assets/dashboard/js/core/popper.min.js"></script>
    <script src="assets/dashboard/js/core/bootstrap.min.js"></script>
    <script src="assets/dashboard/js/atlantis.min.js"></script>
</body>

</html>
