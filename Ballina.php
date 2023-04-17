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
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="sidebar-items">
                <img src="img/person-logo.png">

                <p>
                    <?php echo $resul['username']; ?>

                </p>
                <button class="active"><a href="">Ballina</a></button>
                <button><a href="KurseOnline.php">Kurset Online</a></button>
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
            <div class="carousel" data-flickity='{ "autoPlay": true }'>
                <div class="carousel-cell course1"></div>
                <div class="carousel-cell course2"></div>
                <div class="carousel-cell course3"></div>
                <div class="carousel-cell course4"></div>
                <div class="carousel-cell course5"></div>
            </div>

            <div class="blog-overlay">
                <div class="blog">
                    <hr>
                    <div class="blog-text">
                        <h1>Një përzgjedhje e gjerë kursesh</h1>
                        <ul>
                            <li>Zgjidhni nga 213,000 kurse video online me shtesa të reja të publikuara çdo muaj</li>
                            <li>Qasje e pakufizuar në mbi 19,000 kurse kryesore Udemy, në çdo kohë, kudo</li>
                            <li>Koleksioni i kurseve ndërkombëtare në 14 gjuhë</li>
                            <li>Çertifikimet më të veqanta në teknologji dhe biznes</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-flex">
                    <div class="card-text">
                        <h1>Bëhuni një instruktor</h1>
                        <p>Instruktorë nga e gjithë Kosova mësojnë shume studentë në Kurse Online. Ne ofrojmë mjetet dhe aftësitë për të mësuar atë që ju pëlqen.</p>
                        <button>Apliko</button>
                    </div>
                    <div class="card-img">
                        <img src="img/instruktori.jpg">
                    </div>
                </div>
            </div>



            <div class="main-textt">
                <h2>Disa nga kurset tona me te shitura</h2>
                <hr>
                <div class="job-containerr">
                    <div class="course">
                        <img src="img/course1.png">
                        <h1>Ndërtoni faqe interneti në botën reale me HTML dhe CSS</h1>
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
                    <div class="course">
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
                    <div class="course">
                        <img src="img/course3.png">
                        <h1>Zhvillimi i aplikacionit Android me Kotlin | Fillestar deri te Avancuar</h1>
                        <p>Kotlin | Zhvillimi i aplikacioneve Android me Kotlin <Br>Android A-Z, Firebase Android,
                            Android
                            Studio, projektet e zhvillimit Android</p>
                        <div class="course-text-flex">
                            <div class="course-text-rating">
                                <span>4.9</span><img src="img/stars.png">
                            </div>
                            <h2>79,99€</h2>
                        </div>
                        <button>Shto ne shporte</button>
                    </div>
                    <div class="course">
                        <img src="img/course4.png">
                        <h1>iOS & Swift - Bootcampi<br> i plotë i zhvillimit të<Br> aplikacionit iOS</h1>
                        <p>Nga fillestar në zhvillues i aplikacioneve iOS me vetëm<Br> një kurs! Përditësuar plotësisht
                            me një modul gjithëpërfshirës<br> të dedikuar për SwiftUI!</p>
                        <div class="course-text-flex">
                            <div class="course-text-rating">
                                <span>4.3</span><img src="img/stars.png">
                            </div>
                            <h2>89,99€</h2>
                        </div>
                        <button>Shto ne shporte</button>
                    </div>
                    <div class="course">
                        <img src="img/course5.png">
                        <h1>Vue nga e para me Aplikacionet e Uebit të Vue JS të jetës<Br> reale</h1>
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
                    <div class="course">
                        <img src="img/course6.png">
                        <h1>Bootcamp online përfundimtar i MySQL: Nga fillestari në SQL në ekspert</h1>
                        <p> Behuni ekspert te gjuhes SQL, Punoni<br> me baza komplekse të të dhënave, <br>ndërtoni
                            raporte dhe më shumë!
                            SQL që do t'ju punësojë SQL për Analizën e Biznesit të Dhënave</p>
                        <div class="course-text-flex">
                            <div class="course-text-rating">
                                <span>5.0</span><img src="img/stars.png">
                            </div>
                            <h2>99,99€</h2>
                        </div>
                        <button>Shto ne shporte</button>
                    </div>
                </div>

            </div>
            <div class="main-text">
                <h2>Disa nga partneret tane</h2>
                <hr>
                <div class="main-text-images">
                    <a href="https://www.afkonline.org/" target="_blank"><img src="img/sponsor1.jpg"></a>
                    <a href="https://www.devollicorporation.com/" target="_blank"><img src="img/sponsor2%20(2).png"></a>
                    <a href="https://pestova-ks.com/wp/" target="_blank"><img src="img/sponsor3.png"></a>
                    <a href="https://www.bk.com/" target="_blank"><img src="img/sponsor2.png"></a>
                    <a href="https://www.uni-prizren.com/" target="_blank"><img src="img/sponsor7.png"></a>
                    <a href="https://www.facebook.com/kbtrepca/" target="_blank"><img src="img/sponsor5.png"></a>
                    <a href="https://www.ipko.com/" target="_blank"><img src="img/sponsor8.png"></a>
                    <a href="https://www.petrolcompany.biz/en/home" target="_blank"><img src="img/sponsor9.jpg"></a>
                    <a href="https://www.undp.org/" target="_blank"><img src="img/sponsor10.jpg">

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
                        <a href="https://www.instagram.com//" target="_blank"><img src="img /ig-icon.png"></a>
                        <a href="https://www.linkedin.com/" target="_blank"><img src="img /li-logo.png"></a>
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
