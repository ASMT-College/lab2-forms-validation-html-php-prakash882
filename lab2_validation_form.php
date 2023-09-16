<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['submit'])){
            $email2 = $_GET['email2'];
            $regexEmail = "/[A-Za-z]+@[A-Za-z0-9]+.[A-Za-z]{2,3}/";
            if(preg_match($regexEmail, $email2)){
                echo"Signup Completed";
            }
            else{
                echo"error occured";
            }
        }
    ?>
    <form action="" method="get">
        <div>Signup</div>
        <div id="emailError"></div>
        <div>Email2: <input type="text" name="email2" id="email2" required></div>
        <div>Password: <input type="password" name="pw" id="password" required></div>
        <div>Email: <input type="email" name="email" id="email" required></div>
        <div><button name="submit" type="submit">Signup</button></div>
        <div id="emailvalid"></div>
    </form>
</body>
<!-- <script>
    function Validateform(){
        var emaildata = document.getElementById("email").value
        var passworddata = document.getElementById("password").value
        var email2 = document.getElementById("email2").value
        // var regexEmail = new RegExp('[A-Za-z]+@[A-Za-z0-9]+.[A-Za-z]{2,3}')
        var regexEmail = /[A-Za-z]+@[A-Za-z0-9]+.[A-Za-z]{2,3}/;
        if(regexEmail.test(email2)){
            return true;
        }
        else{
            document.getElementById("emailvalid").innerHTML = "Invalid email";
            return false;
        }
    }
</script> -->
</html>