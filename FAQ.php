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
                <button class="active"><a href="">FAQ</a></button>
                <button><a href="Kontakt.php">Kontakt</a></button>
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
                <img src="img/faqs.jpg">
            </div>

            <div class="kontakt2">
                <hr>
                <div class="faq-flex">
                    <div class="kontakti-info2">
                            <h1>Si behet menyra e pageses?</h1>
                            <h2>Pagesa duhet te kryhet online permes karteles se bankes ose permes paypal</h2>
                        </div>
                                     <div class="kontakti-info2">
                            <h1>Si funksionojne kurset?</h1>
                            <h2>Kurset tona permbajne rreth 50 video te ligjeruara nga ekspertet tane per gjdo gjuhe programuese te cilat mund te hapen pas perfundimit te pageses.
                                Keqsjellja, ingjizimi, shperndarja e videove te ligjeruara verehet dhe denohet ne menyre ligjore.
                            </h2>
                        </div>
                     <div class="kontakti-info2">
                            <h1> A është e mundur të mesosh edhe dizajn grafik edhe kodim?</h1>
                            <h2>Nëse keni interes për kodimin dhe dizajnin grafik, atëherë nuk ka asgjë për të thënë që nuk duhet të mësoni aftësi në të dyja fushat. Ata shpesh punojnë krah për krah, kështu që të kesh njohuri dhe aftësi në të dyja fushat mund të jetë e dëshirueshme për rrugë të caktuara karriere. Ju gjithashtu mund të mendoni për të ndjekur diçka në mes, si dizajni i UI, i cili është një karrierë shumë e kërkuar tani!</h2>
                        </div>
                    <div class="kontakti-info2">
                            <h1>Si mund te kuptoj se qfare te mesoj?</h1>
                            <h2>Gjëja më e rëndësishme është që ju dëshironi të mësoni diçka që ju intereson, sepse sapo të filloni të mësoni, do të jeni me këtë temë për një kohë. Zgjedhja e diçkaje vetëm sepse është e njohur ose ajo që të tjerët po bëjnë nuk është mënyra për të bërë, sepse nëse nuk keni një interes të vërtetë për të, do të humbni motivimin për të mësuar! Kaloni pak kohë duke parë seriozisht shtigjet e ndryshme të karrierës së teknologjisë përpara se të zgjidhni një për të zbritur.</h2>
                        </div>
                    <div class="kontakti-info2">
                            <h1>Cila gjuhe programuse esht me e mira per tu mesuar?</h1>
                            <h2>Unë zakonisht u them shumicës së njerëzve që të fillojnë duke mësuar HTML dhe CSS, pastaj të kalojnë në mësimin e JavaScript. Arsyeja është se JavaScript përdoret kudo: frontend, backend, madje edhe për të ndërtuar aplikacione celulare. Ka shumë raste përdorimi, prandaj mendoj se është e zgjuar të mësosh.</h2>
                        </div>
                        <div class="kontakti-info2">
                            <h1>A preferohen kurset me pagese apo kurset pa pagese?</h1>
                            <h2>Mjetet falas janë të shkëlqyera për të zhytur gishtin tuaj në ujë për të parë nëse ju pëlqen kodimi, por në përgjithësi, unë rekomandoj përdorimin e burimeve me pagesë. Ndërsa ka disa burime të shkëlqyera falas atje (shih më poshtë), shpesh ju merrni atë që paguani. Burimet e paguara ka të ngjarë të jenë shumë më të lehta për t'u përdorur dhe kuptuar. Ju gjithashtu ka të ngjarë të keni mbështetje më të mirë nëse ngecni, dhe më shumë veçori dhe përfitime që burimet e tjera (falas) thjesht nuk mund t'i ofrojnë.</h2>
                        </div>
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
