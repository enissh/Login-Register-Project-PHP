<?php
include 'config.php';

              $sel ="SELECT * FROM regjistrimi";
                    $query = mysqli_query($conn,$sel);
                    $resul = mysqli_fetch_assoc($query);

            
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
                <button class="active"><a href="">Kontakt</a></button>
                <button><a href="Raporti.php">Raporti</a></button>
                <button class="btnexit"><a href="logout.php">Dil</a></button>
            </div>
        </div>
        <main>
            <header>
                <div class="header">
                    <img src="img/main-logo.png">
                    <h1>Kurse online</h1>
                </div>
                <img src="img/cart icon.png" class="header-icon">
            </header>

            <div class="main">
                <img src="img/Kontakti-bg.png">
            </div>
            <div class="main-text">
                <h1>Rreth Kurseve Online</h1>
                <p>Kurse online për 3 vite më rradhë është rrjeti më i madh i mesimit online në Kosovë
                    me mbi 100 mij shfletime të vendeve të punës në çdo muaj.</p>
                <p>Kurse Online shërben si urë lidhëse e mundësive të reja të karrierës të ofruara nga punë-dhënësit për
                    punë-kërkuesit
                    dhe si e tillë ka mundësuar që më shumë se 5,000 persona të gjejnë vende të punës.</p>
                <p>Një staf i dedikuar i 10 personave, bën që konkurset e klientëve të Kurse Online të arrijnë deri tek
                    kandidatët e duhur,
                    në kohën e duhur. Bashkëpunimi me më shumë se 1,000 biznese lokale dhe internacionale,
                    bën që kompania jone të ketë një vlerë të veçantë në tregun e punës në Kosovë.</p>
            </div>
            <div class="main-info">
                <div class="info">
                    <p>Prezenca e lartë e Kurseve Online
                        në Web dhe në rrjete sociale,
                        mundëson konkurset e publikuara
                        të arrijnë kandidatët potencial
                        për klientët të cilët përdorin
                        shërbimet tona.</p>
                </div>
                <div class="info">
                    <p>Më shumë se 70% e vizitorëve në
                        KosovaJob janë vizitorë të cilët
                        vazhdimisht përcjellin platformën
                        tonë për kurset
                        e reja.</p>
                </div>
                <div class="info">
                    <p>Kurse Online është rrjeti më i madh
                        i kurseve online në Kosovë.
                        80% e audiencës së KosovaJob
                        kanë moshën 18 - 30 vjeç.</p>
                </div>
            </div>
            <div class="kontakt">
                <hr>
                <div class="kontakt-flex">
                    <div class="kontakti-info">
                        <h1>Nr. tel -</h1>
                        <h2>383 (049) 111 222</h2>
                    </div>
                    <div class="kontakti-info">
                        <h1>Email -</h1>
                        <h2>info@gmail.com</h2>
                    </div>
                </div>
            </div>
            <footer>
                <div class="logo">
                    <img src="img/main-logo.png">
                    <h2>Kurse online</h2>
                </div>
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
                        <a href="https://www.linkedin.com/" target="_blank"><img src="img/li-logo.png"></a
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
