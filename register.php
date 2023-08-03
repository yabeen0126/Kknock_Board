<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>회원가입</title>
    <style>
      body {
        font-family: Consolas, monospace;
        font-family: 12px;
      }
    </style>
  </head>
  <body>
    <h1>회원가입</h1>
    <form action="insert.php" method="POST">
      
      <p><input type="text" name="username" placeholder="username" required></p>
      <p><input type="text" name="password" placeholder="password" required></p>
      
      <button>완료</button>
    </form>
  </body>
</html>