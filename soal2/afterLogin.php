<?php

$nama = $_POST['nama'];
$email = $_POST['email'];
$date = date("d F Y");
$time = date('l, h:i:s');

    if(empty($nama) OR empty($email)){
        header("Location:redirect.php");
    } else {
        echo "<center> <b>Nama</b> : ".$nama."</center><br>";
        echo "<center> <b>Email</b> : ".$email."</center><br>";  
        echo "<center> You have successfully logged in on : ".$date." at ".$time."</center>";
    }
?>
