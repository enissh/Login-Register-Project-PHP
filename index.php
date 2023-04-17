<?php

include 'config.php';

session_start();

error_reporting(0);


if(isset($_SESSION['username']))
{
    header("Location: Ballina.php");
}

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM regjistrimi WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    
    if($result->num_rows>0)
    {
        $row = mysqli_fetch_assoc($result);
        
        $_SESSION['username'] =$row['username'];
        
        header("Location: Ballina.php");
    }
    else
    {
        echo"<script>alert('Opps!!! Email ose Fjalekalimi jane gabim! Provo perseri!')</script>";
    }
}



?>

<!DOCTYPE html>
<html lang="en">



<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container2">
        <div class="container-background2">
        </div>
        <form action="" method="post">

            <h1>Kyqja</h1>

            <div class="input-flex">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email;?>" required>
            </div>

            <div class="input-flex">
                <input type="password" placeholder="Password" name="password" value="<?php echo $password;?>" required>
            </div>

            <div class="input-btn">
                <button name="submit" class="button">Kyqu</button>
                <button class="button"><a href="register.php">Regjistrohu</a></button>
            </div>

        </form>
    </div>
</body>

</html>
