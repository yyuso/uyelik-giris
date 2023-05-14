<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/49b40112f4.js" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>
<div class = "div">
<div class="header">
<ul class="nav nav-underline">
<li class="nav-item-bg-dark">
    <a class="nav-link" href="#" ><p class="text-white">Home</p></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><p class="text-white">About</p></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><p class="text-white">Services</p></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><p class="text-white">Contact</p></a>
  </li>
  <?php
session_start();

// Kullanıcı adı ve şifresi doğruysa, oturum bilgilerini saklayın
if (isset($_SESSION["username"])) {

    echo"<li class=nav-item>
    <a class=nav-link href=><p class=text-white>"."<img src=image/user-regular.svg class=resimboyut>".$_SESSION["username"]."</p></a>
  </li>";
  echo "<li class=nav-item>
  <a class=nav-link href=cikis.php><p class=text-white>Çıkış Yap</p></a>
  </li>";
    
}
?>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" >
    <i class="fa-solid fa-user"></i style=color:#4f4dd5;>Giriş Yap
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="login.php">Giriş Yap</a></li>
    </ul>
    
</ul>
</div>
</div>
</body>
</html>
