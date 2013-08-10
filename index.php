<?php
session_start();
include 'include/login.php';

@$username = $_POST['username'];
@$password = $_POST['password'];

$login = inicio_sesion($username,$password);

if (! empty($_SESSION["admin"])) 
  {
       header("Location: home.php");
  }



?>

<!DOCTYPE html>
<html>
  <head>
    <title>Corriculum</title>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <style type="text/css">
     body{
            background-color:#f5f5f5; 
      }
      .form-signin {
        max-width: 300px;
        padding:19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
        } 

</style>
  </head>
  <body>
    
<div class="container">

	<form class="form-signin" action="" method="POST" name='login'>
		<h2 class="form-signin-heading">Inicia Sesion</h2>
		<input type="text" name="username" placeholder="Usuario" class="input-block-level">
		<input type="password" name="password" placeholder="Contraseña" class="input-block-level">
		<button type="submit" class="btn btn-large btn-primary">Inicia sesion</button>


	</form>

</div>



    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>