<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>services</title>
    <link rel="stylesheet" href="home.css" class="css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
</head>

<body>
    <!--========== About us page ==========-->
    <section class="servicehomepage">
        <nav class="homenav">
            <label id="homecheck" onclick="togglelist()">
                <i id="bar" class="fas fa-bars"></i>
            </label>
            <h2 class="homelogo">booknow</h2>
            <ul id="showlist">
                <li class="navchild"><a href="home.php">home</a></li>
                <li class="navchild"><a href="aboutus.php">about us</a></li>
                <li class="navchild"><a class="active" href="#">services</a></li>
                <li class="navchild"><a href="login.php">login</a></li>
                <li class="navchild"><a href="signup.php">signup</a></li>
            </ul>
        </nav>
    </section>

    <div class="team">
        <h2 class="teamheading">our services</h2>
    </div>

    <div class="serparent">
        <div class="serchild">
            <div class="serblock s1">
                <h3>Listning</h3>
            </div>
            <div class="serblock s2">
                <h3>Online Reservations</h3>
            </div>
            <div class="serblock s3">
                <h3>Speacial</h3>
            </div>
        </div>
        <div class="hallchild">
            <div class="serblock s4">
                <h3>Advertise</h3>
            </div>
            <div class="serblock s5">
                <h3>Events</h3>
            </div>
            <div class="serblock s6">
                <h3>Food</h3>
            </div>
        </div>
    </div>


    <!-- footer section -->
    <section class="footerparent">
        <div class="endheading">
            <h2 class="aboutheading">contact us</h2>
        </div>
        <footer class="endicons">
            <div class="social">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-instagram-square"></i></a>
                <a href="#"><i class="fab fa-twitter-square"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fas fa-envelope-square"></i></a>
            </div>
        </footer>
    </section>
    <!------- end of footer ------->
</body>

</html>