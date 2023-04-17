<?php
include 'config.php';
$msg="";
$username="";
$email="";
$password="";
$qyteti="";
$data="";

if(isset($_GET['id'])) {
    $id=$_GET['id'];
    $select=mysqli_query($conn, "SELECT * FROM regjistrimi");
    $data=mysqli_fetch_assoc($select);
    $username=$data['username'];
    $email=$data['email'];
    $password=$data['password'];
    $qyteti=$data['qyteti'];
    $data=$data['data'];
}

if(isset($_GET['submit'])) {
    $update=mysqli_query($conn,"UPDATE `regjistrimi` SET `username`='$username',`email`='$email',`password`='$password',`qyteti`='$qyteti',`data`='$data' WHERE id='$id'");
    if($update){
        $msg="Ndryshimi u be me sukses";
    }
}


?>




<html lang="en">

<head>
    <title>Kurse Online - ndryshimi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <form action="Raporti.php" method="post"  class="form">
            <h1>Ndryshimi</h1>
            <div class="input-flex">
                <input type="text" name="username" placeholder="Emri Mbiemri" value="<?php echo $username; ?>">
            </div>

            <div class="input-flex">
                <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
            </div>

            <div class="input-flex">
                <input type="text" name="password" placeholder="Password" value="<?php echo $password; ?>">
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

            </div>

            <div class="input-flex">
                <button name="submit" class="button">Ndrysho</button>
            </div>

            <a href="Raporti.php">Kthehu</a>

        </form>
</body>

</html>

</body>

</html>
