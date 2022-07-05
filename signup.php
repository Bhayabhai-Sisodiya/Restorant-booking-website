



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        .spopup{
            display: flex;
        }

        .signupbox {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            display: inline-block;
            width: 400px;
            height: 400px;
            border-radius: 8px;
            box-shadow: 0 0 3px black;
        }

        .signupbox h2 {
            display: inline-block;
            padding: 10px 20px;
        }
        .signupitems {
            margin-top: 5px;
            position: relative;
        }

        .sign1,
        .sign2,.sign3,
        .sign4 {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sign1 input {
            width: 300px;
            height: 25px;
            margin-top: 10px;
            outline: none;
            border: 1px solid grey;
            border-radius: 4px;
            font-size: 16px;
            padding: 20px;
        }
        .sign2 input{
            text-decoration: none;
            color: black;
            border: 1px solid grey;
            border-radius: 8px;
            padding: 5px 70px;
            margin: 4px 0;
        }
        .sign2 a {
            text-decoration: none;
            color: black;
            border: 1px solid grey;
            border-radius: 8px;
            padding: 5px 70px;
            margin: 4px 0;
        }
        .sign4 {
            margin-left: 30px;
            margin-top: 30px;
            flex-direction: row;
        }
        .sign2 .btn{
            padding: 4px 10px;
            background: tomato;
            border: none;
            outline: none;
        }
        .sign2 a:hover{
            color: white;
            transition: 0.4s;
        }
        .sign3 a{
            text-decoration: none;
            border: 1px solid grey;
            border-radius: 8px;
            padding: 4px 50px;
        }
        
        .sign3 a:hover,.sign4 a:hover,.signcon a:hover{
            color: rgb(174, 0, 255);
            transition: 0.4s;
        }
        .signcon{
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            position: relative;
            margin: 15px 20px;
        }
        .signcon input{
            margin: 3px;
            padding: 3px;
        }
        .signcon a{
            color: red;
            text-decoration: none;
        }
        
        @media (max-width:425px){
            .signupbox{
                width:320px;
                height: 320px;
                margin: 0 10px;
            }
            .sign1 input{
                margin-top: 5px;
                padding:15px ;
            }
            .signcon{
                margin: 10px 20px;
            }
            .sign4{
                margin:15px 30px;
            }
        }
        
    </style>
</head>

<body>
    <script>
        function validation()
        {
            var email=document.getElementById("email");
            var phno=document.getElementById("phno");
            var name=document.getElementById("name");
            var pass=document.getElementById("pass");
            var regex_email=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            var regex_phno=/^[0-9]{10,12}$/;
            var regex_pass=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\w).{8,18}$/;
            var check=document.getElementById("policy").checked;
            if(name.value=="")
            {
                alert("Please enter Name");
                return false;
            }
            if(pass.value=="")
            {
                alert("Please enter password");
                return false;
            }
            if(email.value=="")
            {
                alert("Please enter email");
                return false;
            }
            if(phno.value=="")
            {
                alert("Please enter mobile number");
                return false;
            }
            if(regex_phno.test(phno.value)==false)
            {
                alert("Please enter the mobile number correctly");
                return false;
            }
            if(regex_email.test(email.value)==false )
            {
                alert("Please enter the email correctly");
                return false;
            }
            if(regex_pass.test(pass.value)==false)
            {
                alert("Please enter the password correctly");
                return false;
            }
            if(!check)
            {
                alert("You have not accept the terms");
                return false;
            }
            return true;
        }
    </script>
    <form name="myform" onsubmit="return validation()" method="post" action="connect.php">
    <div class="spopup">

        <div class="signupbox">
            <h2>Sign up</h2>
            <div class="signitems">
                <div class="sign1">
                    <input type="text" placeholder="Full Name" id="name" name="fname">
                    <input type="email" placeholder="Email id" id="email" name="email">
                    <input type="text" placeholder="mobile number" id="phno" name="phno">
                    <input type="password" placeholder="Password" id="pass" name="pass">
                </div>
                <div class="signcon">
                    <input type="checkbox" id="policy">
                    <p>I agree to Homelogo's <a href="#">Terms of Service</a>,<a href="#"> Privacy Policy</a> and <a href="#">Content Policies</a></p>
                </div>
                <div class="sign2">
                    <input type="submit" name="submit"  class="btn"  value="Create Account">
                </div>
            
                <div class="sign4">
                    <p>Already have an account?</p>
                    <a href="login.php">Log in</a>
                </div>
            </div>
        </div>
    </div>
</form>
</body>

</html>