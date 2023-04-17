<?php 
$server = "localhost";
$user = "root";
$pass = "";
$database = "projektiphp";


$conn = mysqli_connect($server, $user, $pass, $database);


if (!$conn)
{
    die("<script>alert('Dicka shkoj gabim, ju lutem provoni perseri!')</script>");
}

?>
