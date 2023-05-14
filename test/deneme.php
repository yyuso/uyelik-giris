<?php

?>
<?php
session_id('1234');
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
    // Kullanıcı giriş yapmış, giriş yap butonunu gizle
    // burada giriş yap butonunu gizlemek için CSS display:none gibi bir stil tanımlayabilirsiniz
}else{
    // Kullanıcı henüz giriş yapmadı, giriş yap butonunu göster
}
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
    // Kullanıcı giriş yapmış, giriş yap butonunu gizle
    echo '<style>.login-btn {display:none;}</style>';
}else{
    // Kullanıcı henüz giriş yapmadı, giriş yap butonunu göster
}
?>

<button class="login-btn">Giriş Yap</button>
<style>
    .login-btn {
        display: none;
    }
</style>