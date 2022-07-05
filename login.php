<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
    <style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        .popup{
            display: flex;
        }

        .loginbox {
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

        .loginbox h2 {
            display: inline-block;
            padding: 10px 20px;
        }
        .logitems {
            margin-top: 5px;
        }

        .log1,
        .log2,
        .log3 {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .log1 input {
            width: 300px;
            height: 25px;
            margin-top: 15px;
            outline: none;
            border: none;
            border-bottom: 1px solid grey;
            font-size: 16px;
        }
        .log2 input{
            text-decoration: none;  
            border: 1px solid grey;
            border-radius: 8px;
            padding: 5px 70px;
            margin: 8px 0;
        }
        .log2 a {
            text-decoration: none;  
            border: 1px solid grey;
            border-radius: 8px;
            padding: 5px 70px;
            margin: 8px 0;
        }
        .log2 a:hover,.log3 a:hover{
            color: rgb(174, 0, 255);
            transition: 0.4s;
        }
        .log2 a:nth-child(3){
            color: black;
        }
        .log2 a:nth-child(3):hover{
            color: white;
            transition: 0.4s;
        }
        
        .log3 {
            margin-left: 30px;
            margin-top: 30px;
            flex-direction: row;
        }
        .log2 .btn{
            padding: 10px 15px;
            background: tomato;
            border: none;
            outline: none;
        }
        .log2 .btn:hover{
            color:white;
            transition:0.4s;
        }

        @media (max-width:425px){
            .loginbox{
                width:320px;
                height: 320px;
                margin: 0 10px;
            }
            .log1 input{
                margin-top: 10px;
            }
            .log2 a{
                margin-top: 0;

            }
        }
        
    </style>
</head>

<body>
    <script>
        function validLogin()
        {
            var name=document.getElementById("name");
            var pass=document.getElementById("password");
            var regex_name=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            var regex_name1=/^[0-9]{10,12}$/;
            var regex_pass=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\w).{8,18}$/;
            if(name.value=="")
            {
                alert("Please enter username");
                return false;
            }
            if(pass.value=="")
            {
                alert("Please enter password");
                return false;
            }
            if(regex_name.test(name.value)==false && regex_name1.test(name.value)==false)
            {
                alert("Please enter the name correctly");
                return false;
            }
            if(regex_pass.test(pass.value)==false)
            {
                alert("Please enter the password correctly");
                return false;
            }
            return true;
        }
    </script>
    <form name="myform" action="logincnt.php" method="post" >
    <div class="popup">

        <div class="loginbox">
            <h2>Log in</h2>
            <div class="logitems">

                <div class="log1">
                    <input type="text" id="name" placeholder="Username" name="email">
                    <input type="password" id="password" placeholder="password" name="pass">                    
                </div>
                <div class="log2">
                    <input type="submit" name="submit" onclick="return validLogin()" class="btn"  value="Log in">
                </div>
                <div class="log3">
                    <p>New member?</p>
                    <a href="signup.php">Sign up</a>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>

</html>