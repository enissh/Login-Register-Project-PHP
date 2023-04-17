<?php
include 'config.php';


              $sel ="SELECT * FROM regjistrimi";
                    $query = mysqli_query($conn,$sel);
                    $resul = mysqli_fetch_assoc($query);

            

if(isset($_GET['id'])) {
    $id=$_GET['id'];
    $delete=mysqli_query($conn,"DELETE  FROM regjistrimi WHERE id ='$id'");
    if($delete){
        header("location:Raporti.php");
        die();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="sidebar-items">
                <img src="img/person-logo.png">
                <p><?php echo $resul['username']; ?></p>
                <button><a href="Ballina.php">Ballina</a></button>
                <button><a href="KurseOnline.php">Kurse Online</a></button>
                <button><a href="FAQ.php">FAQ</a></button>
                <button><a href="Kontakt.php">Kontakt</a></button>
                <button class="active"><a href="">Raporti</a></button>
                <button class="btnexit"><a href="logout.php">Dil</a></button>
            </div>
        </div>
        <main>
            <header>
                <div class="header">
                    <img src="img/main-logo.png">
                    <h1>Raporti</h1>
                </div>
                <img src="img/cart icon.png" class="header-icon">
            </header>

            <div class="ct">
                <table border="1" cellspacing="1" cellpadding="10">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Emri Mbiemri</td>
                            <td>Email</td>
                            <td>Password</td>
                            <td>Qyteti</td>
                            <td>Data</td>
                            <td colspan="2">Ndrysho ose fshij</td>
                        </tr>

                    </thead>
                    <?php
                    
                    include "config.php";
                    error_reporting(0);
                    $query = "select * from regjistrimi";
                    $data = mysqli_query($conn, $query);
                    $total = mysqli_num_rows($data);
                    
                    if($total!=0){
                        while ($result=mysqli_fetch_assoc($data)){
                            echo"
                            <tr>
                            <td>".$result['id']."</td>
                            <td>".$result['username']."</td>
                            <td>".$result['email']."</td>
                            <td>".$result['password']."</td>
                            <td>".$result['qyteti']."</td>
                            <td>".$result['data']."</td>
                            
                            <td><a href='Raporti-ndrysho.php?id=".$row['id']."' class='editbtn'>Ndrysho</td> 
                            
                            <td><a href='?id=".$result['id']."'class='deletebtn' id='delete-btn'>Delete</td> 
                            </tr>
                            ";
                        }
                    }
                    
                    ?>

                </table>
            </div>
            <footer>
                <div class="footer-links">
                    <h2>Rreth nesh</h2>
                    <ul>
                        <li><a href="">Kushtet & Rregullat</a></li>
                        <li><a href="">Kontakti</a></li>
                    </ul>
                </div>
                <div class="footer-links2">
                    <h2>Linqe ndihmese</h2>
                    <ul>
                        <li><a href="https://cvdesign.mobi/?gclid=CjwKCAjwzuqgBhAcEiwAdj5dRgDnxHm100EWS0jZN4HYSUktugkPgJcn3UfxEbc4jfYExP3MQhchoRoC23UQAvD_BwE">Krijo
                                nje CV</a></li>
                        <li><a href="http://boshti.com/calc/index.html">Llogarite pagen</a></li>
                    </ul>
                </div>
                <div class="footer-links3">
                    <h2>Kontakti</h2>
                    <p>+383(049)-111-222</p>
                    <p>info@gmail.com</p>
                </div>
                <div class="footer-socialmedia">
                    <h2>Rrjetet sociale</h2>
                    <div class="footer-socialmedia-flex">
                        <a href="https://www.facebook.com/" target="_blank"><img src="img/fb-logo.png"></a>
                        <a href="https://www.instagram.com//" target="_blank"><img src="img/ig-icon.png"></a>
                        <a href="https://www.linkedin.com/" target="_blank"><img src="img/li-logo.png"></a>
                    </div>
                </div>
            </footer>
            <div class="footer">
                <p>Copyright © 2023 - KurseOnline LLC</p>
            </div>
        </main>
    </div>
</body>

</html>
