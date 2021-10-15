<?php 
 
$server = "localhost";
$user = "melcanzc_yogi";
$pass = "yogi_51@";
$database = "melcanzc_login";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>