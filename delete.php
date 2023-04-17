<?php
include 'config.php';
session_start(); 
session_unset(); 
error_reporting(0);

$id=$_GET['id'];

    $sql = "DELETE FROM  WHERE id = '$id'";
    if (mysqli_query($conn, $sql)) {
        echo "User deleted successfully.";
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
?>