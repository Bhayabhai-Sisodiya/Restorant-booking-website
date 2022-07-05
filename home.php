<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
    <link rel="stylesheet" href="home.css" class="css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />

</head>

<body>
    <!--========== homepage ==========-->
    <section class="homepage">

        <!------- navbar ------->
        <nav class="homenav">
            <label id="homecheck" onclick="togglelist()">
                <i id="bar" class="fas fa-bars"></i>
            </label>
            <h2 class="homelogo">booknow</h2>
            <ul id="showlist">
                <li class="navchild"><a class="active"  href="#">home</a></li>
                <li class="navchild"><a href="aboutus.php">about us</a></li>
                <li class="navchild"><a href="services.php">services</a></li>
                <li class="navchild"><a href="login.php">login</a></li>
                <li class="navchild"><a href="signup.php">signup</a></li>
            </ul>
        </nav>
        <!------- end of navbar ------->

        <div class="homebg">
            <h2 class="homeheading">a humbled welcome, every time</h2>
        </div>
    </section>

    <!--========== end of homepage ==========-->

    <!--========== second page ==========-->
    <section class="secondpage">
        <div class="secondparent">
            <div class="secondchild secondchild1">
                <div class="secondupper">
                    <h2 class="secondheading">Tables</h2>
                    <a href="table.php" class="childdetails"><button class="detailbtn">Explore</button></a>
                </div>
            </div>

            <div class="secondchild secondchild2">
                <div class="secondupper">
                    <h2 class="secondheading">Banquet Halls</h2>
                    <a href="hall.php" class="childdetails"><button class="detailbtn">Explore</button></a>
                </div>
            </div>

            <div class="secondchild secondchild3">
                <div class="secondupper">
                    <h2 class="secondheading">Events</h2>
                    <a href="event.php" class="childdetails"><button class="detailbtn">Explore</button></a>
                </div>
            </div>
        </div>
    </section>

    <section class="second_imagebar">
    <div class="second_imageslider"></div>

</section>
    <!--========== end of second page ==========-->











                        <!-- footer section for all pages-->
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

    <script type="text/javascript">
        var a;
        function togglelist() {
            if (a == 1) {
                document.getElementById('showlist').style.display = "inline";
                return a = 0;
            }
            else {
                document.getElementById('showlist').style.display = "none";
                return a = 1;
            }
        }
       
        


    </script>
</body>

</html>