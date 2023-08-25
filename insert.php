<<<<<<< HEAD
<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <style>
      body {
        font-family: Consolas, monospace;
        font-family: 12px;
      }
    </style>
  </head>
  <body>
    <?php
      $username = $_POST[ 'username' ];
      $password = $_POST[ 'password' ];
      
        $jb_conn = mysqli_connect( 'localhost', 'yabeen', '1q2w3e4r', 'Kknockboard' );
        $jb_sql = "INSERT INTO login ( username, password ) VALUES (  '$username', '$password' );";
        mysqli_query( $jb_conn, $jb_sql );
        echo '<h1>가입완료! 로그인해주세요. </h1>';
      
    ?>
    <p>
      <a href="index.php">로그인페이지</a>
     </p>
  </body>
=======
<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <style>
      body {
        font-family: Consolas, monospace;
        font-family: 12px;
      }
    </style>
  </head>
  <body>
    <?php
      $username = $_POST[ 'username' ];
      $password = $_POST[ 'password' ];
      
        $jb_conn = mysqli_connect( 'localhost', 'yabeen', '1q2w3e4r', 'Kknockboard' );
        $jb_sql = "INSERT INTO login ( username, password ) VALUES (  '$username', '$password' );";
        mysqli_query( $jb_conn, $jb_sql );
        echo '<h1>가입완료! 로그인해주세요. </h1>';
      
    ?>
    <p>
      <a href="index.php">로그인페이지</a>
     </p>
  </body>
>>>>>>> d81e73c4841ac6212ad446296d8be7e95f5fcf42
</html>