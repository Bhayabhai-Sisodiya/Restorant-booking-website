<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register details</title>
   <link rel="stylesheet" href="home.css" class="css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" >
</head>

<body>
    <script>
        function valid()
        {
            var name=document.getElementById("name");
            var phno=document.getElementById("phno");
            var num=document.getElementById("num");
            var date=document.getElementById("date");
            var time=document.getElementById("time");
            if(date.value=="")
            {
                alert("Please enter date");
                return false;
            }
            if(time.value=="")
            {
                alert("Please enter time");
                return false;
            }
            if(name.value=="")
            {
                alert("Please enter name");
                return false;
            }
            if(phno.value=="")
            {
                alert("Please enter phone number");
                return false;
            }
            if(num.value=="")
            {
                alert("Please enter number of people");
                return false;
            }
            
            return true;
        }
    </script>
    <section class="regcontainer">
        <h2>book your event now</h2>
        <div class="regcardcontainer">
            <div class="regeventimg">
                <!-- img div -->
            </div>
            <div class="regcontent">
                <h3>Reservation</h3>
                <form class="regform" name="myform" onsubmit="return valid()" action="regedtl.php" method="post">
                    <div class="formrow">
                        <input type="date" id="date" name="date">
                        <input type="time" id="time" name="time">
                    </div>
                    <div class="formrow">
                        <input type="text" placeholder="Your name" id="name" name="name">
                        <input type="text" placeholder="Phone number" id="phno" name="phno">
                    </div>
                    <div class="formrow">
                        <input type="number" placeholder="How many persons?" min="1" id="num" name="members">
                    </div>

                   
                    <div class="formrow">
                    
                        <input type="submit" value="BOOK EVENT" name="submit" id="submit">

                    </div>

                </form>
            </div>

        </div>
    </section>
</body>

</html>