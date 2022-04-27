<?php

if($_POST){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $date = date("d F Y");
    $time = date('l, h:i:s');
}

        echo "<center> <b>Nama</b> : ".$nama."</center><br>";
        echo "<center> <b>Email</b> : ".$email."</center><br>";  
        echo "<center> You have successfully logged in on : ".$date." at ".$time."</center>";
?>
