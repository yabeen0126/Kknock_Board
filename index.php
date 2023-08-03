<?php
    include("connection.php")
?>
<!DOCTYPE html>
<html lang="kor">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css?after">
</head>
<body>
    <div id="form">
        <h1>Login Page</h1>
        <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
            <label>ID </label><br>
            <input type="text" id="user" name="user"><br><br>
            <label>Password</label><br>
            <input type="password" id="pass" name="pass"><br><br>
            <input type="submit" id="btn" value="login" name="submit"/><br>
            <a href="./register.php">회원가입</a>
        </form>
    </div> 
    <script>
        function isvalid(){
            var user = document.form.user.value;
            var pass = document.form.pass.value;
            if(user.length=="" && pass.length==""){
                alert("아이디와 패스워드를 입력하세요!");
                return false
            }
            else{
                if(user.length=="" ){
                    alert("아이디를 입력하세요!");
                    return false
                }
                if(pass.length=="" ){
                    alert("패스워드를 입력하세요!");
                    return false
                }
            }
        }
    </script>
</body>
</html>