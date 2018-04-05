<?php
$host  = "localhost";
$user  = "root";
$pass  ="";
$db    = "spk_sumi";
$connect = mysqli_connect ($host, $user, $pass, $db) or die ("gagal konek");
if(!$connect){
    die("KOneksi GAGAL".mysqli_connect_errno()." - ".mysqli_connect_error());
}
?>