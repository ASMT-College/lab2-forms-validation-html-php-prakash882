<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get" onsubmit="return Validateform()">
        <div>Signup</div>
        <div id="emailError"></div>
        <div>Email2: <input type="text" name="email2" id="email2" required></div>
        <div>Password: <input type="password" name="pw" id="password" required></div>
        <div>Email: <input type="email" name="email" id="email" required></div>
        <div><button type="submit">Signup</button></div>
    </form>
</body>
<script>
    function Validateform(){
        var emaildata = document.getElementById("email").value
        var passworddata = document.getElementById("password").value
        var email2 = document.getElementById("email2").value
        // var regexEmail = new RegExp('[A-Za-z]+@[A-Za-z0-9]+.[A-Za-z]{2,3}')
        var regexEmail = /[A-Za-z]+@[A-Za-z0-9]+.[A-Za-z]{2,3}/;
        if(regexEmail.text(email2)){
            return true;
        }
        else{
            document.getElementById("emailError").innerHTML = "Invalid email";
            return false;
        }
    }
</script>
</html>