<?php
if (isset($_POST)) {
    include '../config/koneksi.php';
    //include('../konfig/functions.php');
    $email    = $_GET['Username'];
    $password = $_GET['Password'];
       
    $sql = "select  * from user  where username='$email'  and password='$password' ";
    
    $sql_login = mysqli_query($connect, $sql);
    if (!$sql_login) {
        die("Queri GAGAL " . mysqli_errno($connect) . " - " . mysqli_error($connect));
    }
    
    $arr = mysqli_fetch_row($sql_login);
    echo "$arr[0]";
    
    if ($sql_login->num_rows > 0) {
        $_SESSION['username'] = $email;
        
        
        //memanggil status login 
        header("Location: ../admin");
        
    } else {
        
        echo '<script language="javascript"> alert("Maaf, Usename atau Password Anda Salah.!!!"); document.location="../index.php";</script>';
        
    }
}