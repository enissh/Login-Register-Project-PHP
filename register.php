<?php

include 'config.php';

error_reporting(0);

session_start();

if(isset($_SESSION['username']))
{
    header("Location: index.php");
}

if(isset($_POST['submit']))
{
    //grumbullimi i te dhenave nga fushat perkatese
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $qyteti = $_POST['qyteti'];
    $data = $_POST['data'];
    
    
    if($password == $cpassword)
    {
        $sql = "SELECT * FROM regjistrimi WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        
        if(!$result->num_rows>0)
        {
            $sql = "INSERT INTO regjistrimi (username, email, password, qyteti, data) VALUES ('$username','$email','$password','$qyteti','$data')";
            
            $result = mysqli_query($conn, $sql);
            if($result)
            {
                
                echo "<script>alert('Urime, ju jeni regjistruar me sukses!')</script>";
                $username = "";
                $email = "";
              $_POST['password'] = "";
                $_POST['cpassword'] = "";
                $qyteti = "";
                $data = "";
            } else 
            {
                echo "<script>alert('Opps!!! Dicka shkoj gabim!')</script>";
            }
        } else // nese email ekziston
        {
            echo "<script>alert('Opps!!! kjo email ekziston!')</script>";
        }
    }
    else
    {
        echo"<script>alert('Opps!!! Fjalekalimet nuk perputhen!')</script>";
    }
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
    <div class="container-background">
    </div>
        <form action="" method="post" >
            <h1>Regjistrimi</h1>
            <div class="input-flex">
                <input type="text" name="username" placeholder="Emri Mbiemri" value="<?php echo $username; ?>">
            </div>

            <div class="input-flex">
                <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
            </div>

            <div class="input-flex">
                <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>">
            </div>

            <div class="input-flex">
                <input type="password" name="cpassword" placeholder="Konfirmo passwordin" value="<?php echo $cpassword; ?>">
            </div>

            <div class="input-flex">
                    <select name="qyteti">
                    <option value="" disabled selected hidden>Qyteti</option>
                    <option value="Prishtine">Prishtine</option>
                    <option value="Ferizaj">Ferizaj</option>
                    <option value="Prizren">Prizren</option>
                    <option value="Gjilan">Gjilan</option>
                    <option value="Mitrovice">Mitrovice</option>
                    <option value="Peja">Peja</option>
                </select>
         

                <div class="input-flex">
                  <input type="date" name="data" value="">
                </div>

                <div class="input-radio">
                </div>
            </div>

            <div class="input-flex">
                <button name="submit" class="button">Regjistrohu</button>
            </div>

            <p>Ke llogari? <a href="index.php">Kyqu tani</a></p>

        </form>
</body>

</html>

</body>

</html>
