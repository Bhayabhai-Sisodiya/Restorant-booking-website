<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="home.css" class="css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
</head>

<body>
                        <!--========== About us page ==========-->
    <section class="abouthomepage">
        <nav class="homenav">
            <label id="homecheck" onclick="togglelist()">
                <i id="bar" class="fas fa-bars"></i>
            </label>
            <h2 class="homelogo">booknow</h2>
            <ul id="showlist">
                <li class="navchild"><a href="home.php">home</a></li>
                <li class="navchild"><a class="active" href="#">about us</a></li>
                <li class="navchild"><a href="services.php">services</a></li>
                <li class="navchild"><a href="login.php">login</a></li>
                <li class="navchild"><a href="signup.php">signup</a></li>
            </ul>
        </nav>
    </section>

                        <!------- details ------->
    <div class="team">
        <h2 class="teamheading">our team</h2>
    </div>
    <section class="details">
        <div class="teammembers">
            <div class="member member1">
                <img src="img/avtar.png" alt="Member" class="photo">
                <h3 class="name">Mitesh Kateliya</h3>
                <p class="dtl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas obcaecati fugiat
                    laboriosam rerum velit Laudantium necessitatibus fugit voluptates reprehenderit ratione
                    nihil!</p>
            </div>
            <div class="member member1">
                <img src="img/avtar.png" alt="Member" class="photo">
                <h3 class="name">Meet Kerasiya</h3>
                <p class="dtl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas obcaecati fugiat
                    laboriosam rerum velit Laudantium necessitatibus fugit voluptates reprehenderit ratione
                    nihil!</p>
            </div>
            <div class="member member1">
                <img src="img/avtar.png" alt="Member" class="photo">
                <h3 class="name">Krupal Vasani</h3>
                <p class="dtl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas obcaecati fugiat
                    laboriosam rerum velit Laudantium necessitatibus fugit voluptates reprehenderit ratione
                    nihil!</p>
            </div>
            <div class="member member1">
                <img src="img/avtar.png" alt="Member" class="photo">
                <h3 class="name">Bhayubha Sisodiya</h3>
                <p class="dtl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas obcaecati fugiat
                    laboriosam rerum velit Laudantium necessitatibus fugit voluptates reprehenderit ratione
                    nihil!</p>
            </div>
        </div>
    </section>

    <!------- end of details ------->
    <div class="team">
        <h2 class="teamheading">our journy</h2>
    </div>
    <section class="aboutjourny1">
        <div class="journydtl1">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sed ipsa totam laudantium neque 
                voluptas quis sit illum asperiores delectus. Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                 Autem laudantium aut saepe sapiente? Tempore, doloremque! Velit fuga pariatur voluptas eaque. Totam 
                 quisquam autem placeat eius impedit iste sapiente consectetur! Molestias illum tempora vel laborum quod, 
                 optio deserunt quae beatae corporis cum iste dolore odio hic laudantium nesciunt. Assumenda, repellat vitae?</p>
                <img src="img/people.jpg" alt="members">
        </div>
    </section>

    <section class="aboutjourny2">
        <div class="journydtl2">
            <div class="journychild journychild1">
                    <h2>10k+ Cities</h2>
            </div>
            
            <div class="journychild journychild2">
                    <h2>100k+ Restaurents</h2>
            </div>
            
            <div class="journychild journychild3">
                <h2>over 10M+ Happy Custmers</h2>
            </div>
        </div>
    </section>

    
    

    <!------- footer ------->
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