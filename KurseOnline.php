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
                <button class="active"><a href="">Kurse Online</a></button>
                <button><a href="FAQ.php">FAQ</a></button>
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
            <div class="job-container">
                <div class="coursee">
                    <img src="img/course1.png">
                    <h1>Ndërtoni faqe interneti të përgjegjshme në botën reale me HTML dhe CSS</h1>
                    <p>Mësoni HTML5, CSS3 dhe dizajnin e uebit modern duke ndërtuar një faqe interneti mahnitëse për
                        portofolin tuaj!
                        Përfshin flexbox dhe CSS Grid</p>
                    <div class="course-text-flex">
                        <div class="course-text-rating">
                            <span>4.8</span><img src="img/stars.png">
                        </div>
                        <h2>94,99€</h2>
                    </div>
                    <button>Shto ne shporte</button>
                </div>
                <div class="coursee">
                    <img src="img/course2.png">
                    <h1>Zhvilluesi i plotë i React në <br>2023 (me Redux, Hooks, GraphQL)</h1>
                    <p>Përditësuar! Bëhuni një Zhvillues i Lartë React. Ndërtoni një aplikacion masiv të tregtisë
                        elektronike me Redux, Hooks, GraphQL, Stripe, Firebase</p>
                    <div class="course-text-flex">
                        <div class="course-text-rating">
                            <span>4.8</span><img src="img/stars.png">
                        </div>
                        <h2>89,99€</h2>
                    </div>
                    <button>Shto ne shporte</button>
                </div>
                <div class="coursee">
                    <img src="img/course3.png">
                    <h1>Zhvillimi i aplikacionit Android me Kotlin | Fillestar deri te Avancuar</h1>
                    <p>Kotlin | Zhvillimi i aplikacioneve Android me Kotlin <Br>Android A-Z, Firebase Android, Android
                        Studio, projektet e zhvillimit Android</p>
                    <div class="course-text-flex">
                        <div class="course-text-rating">
                            <span>4.9</span><img src="img/stars.png">
                        </div>
                        <h2>79,99€</h2>
                    </div>
                    <button>Shto ne shporte</button>
                </div>
                <div class="coursee">
                    <img src="img/course4.png">
                    <h1>iOS & Swift - Bootcampi<br> i plotë i zhvillimit të<Br> aplikacionit iOS</h1>
                    <p>Nga fillestar në zhvillues i aplikacioneve iOS me vetëm<Br> një kurs! Përditësuar plotësisht me
                        një modul gjithëpërfshirës<br> të dedikuar për SwiftUI!</p>
                    <div class="course-text-flex">
                        <div class="course-text-rating">
                            <span>4.3</span><img src="img/stars.png">
                        </div>
                        <h2>89,99€</h2>
                    </div>
                    <button>Shto ne shporte</button>
                </div>
                <div class="coursee">
                    <img src="img/course5.png">
                    <h1>Vue nga e para me Aplikacionet<Br> e Uebit të Vue JS të jetës<Br> reale</h1>
                    <p>Vue me aplikacionet bazë Vue js. Vue.js është një Kornizë<Br> e njohur JavaScript frontend.
                        Mësoni vuejs, bëhuni zhvillues <br> te vue</p>
                    <div class="course-text-flex">
                        <div class="course-text-rating">
                            <span>4.5</span><img src="img/stars.png">
                        </div>
                        <h2>19,99€</h2>
                    </div>
                    <button>Shto ne shporte</button>
                </div>
                <div class="coursee">
                    <img src="img/course 6.jpg">
                    <h1>Bootcamp përfundimtar i MySQL: Shkoni nga fillestari në SQL në ekspert</h1>
                    <p>THJESHT E RIRITUAR PLOTËSISHT! Master SQL, <br>Punoni me baza komplekse të të dhënave, ndërtoni
                        raporte <br>dhe më shumë!</p>
                    <div class="course-text-flex">
                        <div class="course-text-rating">
                            <span>5.0</span><img src="img/stars.png">
                        </div>
                        <h2>99,99€</h2>
                    </div>
                    <button>Shto ne shporte</button>
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
                        <li><a
                                href="https://cvdesign.mobi/?gclid=CjwKCAjwzuqgBhAcEiwAdj5dRgDnxHm100EWS0jZN4HYSUktugkPgJcn3UfxEbc4jfYExP3MQhchoRoC23UQAvD_BwE">Krijo
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