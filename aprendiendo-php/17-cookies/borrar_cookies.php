<?php
if($_COOKIE['micookies']){
    unset($_COOKIE['micookies']);
    setcookie('micookies','',time()-100);
}

header('Location:ver_cookies.php');




?>

