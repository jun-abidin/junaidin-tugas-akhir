<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST['username'];
$password = $_POST['password'];
$sql = $pdo->prepare("SELECT * FROM `user` WHERE `user` = :a AND `pass` = :b");
$sql->bindParam(':a', $username);
$sql->bindParam(':b', $password);
$sql->execute(); // Eksekusi querynya
$datauser = $sql->fetchAll();


$jumlahuser = $sql->rowCount();
if ($jumlahuser <= 0) {
    $message = "Password dan Username Salah";
    $_SESSION['pesan'] = $message;
} else {
    $message = "Selamat Datang";
    foreach ($datauser as $datausernya) {
        $_SESSION['namaadmin'] = $datausernya['nama'];
        $_SESSION['pesan'] = $message;
    
    }
    echo "<script>location.replace('$serverlink.home')</script>"; // Redirect kembali ke halaman index.php

}

// $message = "Data Pasien an. $nama berhasil diedit";
// $_SESSION['pesan'] = $message;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>login-form - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
    <body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <h3 class="text-center text-white pt-5">
        <?php
  // Cek apakah terdapat cookie dengan nama message
  if (isset($_SESSION["pesan"])) { // Jika ada
  echo $_SESSION["pesan"];
  }
  unset($_SESSION["pesan"]);


  ?>

        </h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="<?php echo $serverlink; ?>home/login" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
	<script type="text/javascript">
		</script>
</body>
</html>
