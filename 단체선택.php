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
			<?php
			// 데이터베이스 연결 정보

			$host = 'localhost'; // 호스트명
			$user = 'habin'; // 사용자명
			$pass = 'qwert1234';   // 비밀번호
			$dbname = 'Kknockboard'; // 데이터베이스 이름
    

			// 데이터베이스 연결
			$conn = mysqli_connect($host, $user, $pass, $dbname);

			// 연결 확인
			if (mysqli_connect_errno()) {
			die("데이터베이스 연결 실패: " . mysqli_connect_error());
			}

			// 데이터베이스에서 정보를 가져옵니다.
			// $query = "SELECT univ.학교명 FROM 회원 JOIN univ ON 회원.소속대학코드=univ.학교코드";
			$query = "SELECT DISTINCT(학교명) FROM 단체모음";
			$result = mysqli_query($conn, $query);

			if (mysqli_num_rows($result) > 0) {
				// 테이블 헤더 출력
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<h1>" . $row['학교명'] . "</h1>"; #해당 학교, 학과, 학기의 여러 값 중 고유값만 나오게 출력
			}
			}
			// echo "<div class='school'><p>경기대학교</p></div>"; ##나중에 회원가입 정보랑 연동시켜서 학교 이름 띄우게 수정할 예정.. 그전에 임시로 띄워놓는용
			?>


            <div class="card">
                <div class="board">
					
                    <h3><a href="">종류</a></h3>
            <?php
			// 데이터베이스 연결 정보
			// 데이터베이스 연결

			if (mysqli_connect_errno()) {
			die("데이터베이스 연결 실패: " . mysqli_connect_error());
			}

			// 데이터베이스에서 정보를 가져옵니다.
			$query = "SELECT DISTINCT(종류) AS 종류 FROM 단체모음";
			$result = mysqli_query($conn, $query);

			if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<a class='list'><p>" . $row['종류'] . "</p></a>"; #해당 학교, 학과, 학기의 여러 값 중 고유값만 나오게 출력
				} 
			}

			?>
                </div>
            </div>
            <div class="card">
                <div class="board">
                    <h3><a href="">소속</a></h3>
            <?php
			// 데이터베이스에서 정보를 가져옵니다.
			$query = "SELECT DISTINCT(단체명) AS 단체명 FROM 단체모음 WHERE 종류='학생회'";
			$result = mysqli_query($conn, $query);

			if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<a class='list'><p>" . $row['단체명'] . "</p></a>"; #해당 학교, 학과, 학기의 여러 값 중 고유값만 나오게 출력
				} 
			}
			?>
                </div>
            </div>
            <div class="card">
                <div class="board">
                    <h3><a href="">단체명</a></h3>
            <?php
			// 데이터베이스에서 정보를 가져옵니다.
			$query = "SELECT 소속 FROM 단체모음 WHERE 단체명='소프트웨어경영대학' AND 소속 IS NOT NULL";
			$result = mysqli_query($conn, $query);

			if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<a class='list'><p>" . $row['소속'] . "</p></a>"; #해당 학교, 학과, 학기의 여러 값 중 고유값만 나오게 출력
				} 
			}
			?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
