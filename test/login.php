


<!DOCTYPE html>
<html>
<head>
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="login-div">
    <h2 style="color:white;">Giriş Yap</h2>
    <div class="mb-3" style="margin-top:30px; color:white;">
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Kullanıcı Adınızı Giriniz" name="username"><br>
  <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Şifrenizi Giriniz" name="password"><br>
  <button type="submit" class="btn btn-primary mb-3" name="submit">Giriş Yap</button><br>
        <a href="register.php" style=color:white;>Üye ol</a>
    </form>
</body>
</html>
<?php
session_start();
include("database/connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = '$username'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["username"] = $row["username"];
            header("location: index.php");
        } else {
            echo "Giriş bilgileri yanlış.";
        }
    } else {
        echo "Kullanıcı adı bulunamadı.";
    }
}

mysqli_close($conn);
?>