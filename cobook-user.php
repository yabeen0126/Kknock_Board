<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <nav>
        <div class="wrap">
            <div id="logo">
                <p><span class="name multiple">CO BOOK</span><span class="subname">경기대</span></p>
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
                <li><a href="">신문고작성</a></li>
                <li><a href="">맛집추천</a></li>
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
            <div class="card">
                <div class="scroll">

                    <?php
                    // Database connection details
                    $host = "localhost";
                    $username = "habin";
                    $password = "qwert1234";
                    $database = "database";

                    // Create a connection
                    $conn = new mysqli($host, $username, $password, $database);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Fetch the university list from the database
                    $sql = "SELECT university_name FROM universities";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo '<table>';
                        echo '<h3><a href="./단체선택.php">장부</h3>';

                        while ($row = $result->fetch_assoc()) {
                            $universityName = $row['university_name'];
                            echo '<a class="list" href="another_page.php?university=' . urlencode($universityName) . '">' . $universityName . '</a>';
                        }

                        echo '</table>';
                    } else {
                        echo 'No universities found in the database.';
                    }

                    // Close the database connection
                    $conn->close();
                    ?>

                </div>
            </div>
            <div class="card">
                <div class="board">
                    <h3><a href="MT.php">MT 리뷰</a></h3>
                    <a class="list" href=""><time>07/30
                            18:00</time>
                        <p>내용 1</p>
                      
                    </a><a class="list" href=""><time>07/30 00:46</time>
                        <p>내용 2</p>
                       
                    </a><a class="list" href="a"><time>07/29 23:52</time>
                        <p>내용 3</p>
                      
                    </a><a class="list" href=""><time>07/29 19:15</time>
                        <p>내용 4</p>
                       
                    </a><a class="list" href=""><time>07/29 19:15</time>
                        <p>내용 5</p>
                      
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="board">
                    <h3><a href="">학생 신문고</a></h3>
                    <a class="list" href=""><time>방금</time>
                        <p>내용 1</p>
                       
                    </a><a class="list" href=""><time>22분 전</time>
                        <p>내용 2</p>
                       
                    </a><a class="list" href=""><time>22분 전</time>
                        <p>내용 3</p>
                       
                    </a><a class="list" href=""><time>45분 전</time>
                        <p>내용 4</p>
                       
                    </a><a class="list" href=""><time>07/29 19:15</time>
                        <p>내용 5</p>
                       
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="board">
                    <h3><a href="food.php">식당 추천</a></h3>
                    <a class="list" href=""><time>방금</time>
                        <p>내용 1</p>
                       
                    </a><a class="list" href=""><time>22분 전</time>
                        <p>내용 2</p>
                       
                    </a><a class="list" href=""><time>22분 전</time>
                        <p>내용 3</p>
                       
                    </a><a class="list" href=""><time>45분 전</time>
                        <p>내용 4</p>
                        
                    </a><a class="list" href=""><time>07/29 19:15</time>
                        <p>내용 5</p>
                       
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
