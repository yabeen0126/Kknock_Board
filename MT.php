<!DOCTYPE html>
<html lang="en">
<?php include("db.php"); ?>

<title>cobook</title>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="boardstyle.css">
</head>

<body>
  <nav>
    <div class="wrap">
      <div id="logo">
        <p><span class="name multiple"><a href="cobook-user.php">CO BOOK</a></span><span class="subname">경기대</span></p>
      </div>
    </div>
  </nav>
  <div id="container" class="community">
    <div class="leftside">
      <div class="card pconly">
        <form class="logged">
          <img src="https://cf-fpi.everytime.kr/3215526/1594901153.png" class="picture">
          <p class="nickname">야빈</p>
          <p class="school">이하빈</p>
          <p class="school">201911111</p>
          <ul class="buttons">
            <li><a href="">내 정보</a></li>
            <li><a href="">로그아웃</a></li>
          </ul>
          <hr>
        </form>
      </div>
      <ul class="button">
        <li><a href="">장부작성</a></li>
        <li><a href="">피드백</a></li>
      </ul>
      <div class="card">
        <div class="menus"> 즐겨찾기
          <a href="" class="myarticle">즐겨찾기 1</a>
          <a href="" class="mycommentarticle">즐겨찾기 2</a>
          <a href="" class="myscrap">추가하기</a>
          <hr>
        </div>
      </div>
    </div>
    <div class="main">
      <div id="board_area">
        <h1>MT리뷰
          </svg> </h1>
        <h4> </h4>
        <table class="list-table">
         
          <?php
          // board테이블에서 idx를 기준으로 내림차순해서 5개까지 표시
          $sql = mq("select * from board order by idx desc limit 0,5");
          while ($board = $sql->fetch_array()) {
            //title변수에 DB에서 가져온 title을 선택
            $title = $board["title"];
            if (strlen($title) > 30) {
              //title이 30을 넘어서면 ...표시
              $title = str_replace($board["title"], mb_substr($board["title"], 0, 30, "utf-8") . "...", $board["title"]);
            }

            ?>
            <a class="item">
            <div class="info">
              <div class="titleContainer">
                <span class="title">
                  <span class="text">
                  <a href="./read.php?idx=<?php echo $board["idx"]; ?>"><?php echo $title; ?></a>
                  </span>
                </span>
              </div>

              <div class="etc">
                <div class="nickName" style = "float:left; margin-right:10px;">
                  <?php echo $board['name'] ?>
                </div>
                <div class="dot"></div>
                <div class="datetime" style = "float:left; margin-right:10px;">
                  <?php echo $board['date'] ?>
                </div>
                <div class="dot"></div>
                <div class="viewCount" style = "float:left; margin-right:10px;">
                  <?php echo $board['hit']; ?>
                </div>
                <div class="dot"></div>
              </div>
            </div>
          </a>
          <?php } ?>
        </table>
        <div id="write_btn">
          <a href="./write.php"><button>글쓰기</button></a>
        </div>
      </div>
      <div id="search_box">
        <form action="./search_result.php" method="get">
          <select name="catgo">
            <option value="title">제목</option>
            <option value="name">글쓴이</option>
            <option value="content">내용</option>
          </select>
          <input type="text" name="search" size="40" required="required" /> <button>검색</button>
        </form>
      </div>
    </div>
  </div>

</body>

</html>