<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
	<script>
		
    // 첫 번째 표의 하이퍼링크를 클릭했을 때 실행할 함수
    function showSecondTable(clickedElement) {
		// 두 번째 표를 보이도록 스타일 변경
		document.getElementById('secondTable').style.display = 'table';
    
		// 선택된 행사명 값을 PHP로 전달하기 위한 hidden input 설정
		document.getElementById('selectedEventName').value = eventname;
		var eventName = clickedElement.getAttribute('name');
		// 폼의 hidden input에 JavaScript 변수 값을 설정
        document.getElementById('eventNameInput').value = eventName;
        // 폼 제출
        document.getElementById('myForm').submit();

		console.log(eventname);
    }
	
	function openPopup() {
        // 팝업 창을 띄우기 위한 URL
        var popupUrl = "popup.php"; // 팝업 창으로 보낼 데이터를 URL에 추가하려면 여기에 추가
        
        // 팝업 창 열기
        var popupWindow = window.open(popupUrl, "Popup", "width=500, height=300");
    }
</script>
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
		<h2>2023년도 1학기 회계세무학과 장부</h2>
		<form id="myForm" action="process.php" method="post">
			<input type="hidden" id="eventNameInput" name="eventName" value="">
		</form>
		<?php
			// 데이터베이스 연결 정보

			$host = 'localhost'; // 호스트명
			$user = 'habin'; // 사용자명
			$pass = 'qwert1234';   // 비밀번호
			$dbname = 'univ'; // 데이터베이스 이름
    
			// 데이터베이스 연결
			$conn = mysqli_connect($host, $user, $pass, $dbname);

			// 연결 확인
			if (mysqli_connect_errno()) {
				die("데이터베이스 연결 실패: " . mysqli_connect_error());
			}

			// 데이터베이스에서 정보를 가져옵니다.
			$query = "SELECT `행사명`, `행사시작일`, `행사마감일`,SUM(`입금(원)`) AS `입금`,SUM(`출금(원)`) AS `출금`,(SELECT `잔액(원)` FROM `2023` ORDER BY `거래일시` DESC LIMIT 1) AS `잔액`, MAX(`내역`) AS `비고` FROM `2023` WHERE `학교코드`=4 and `학과코드`=90 GROUP BY `행사명` ORDER BY `거래일시`";
			$result = mysqli_query($conn, $query);

			if (mysqli_num_rows($result) > 0) {
				// 테이블 헤더 출력
				echo "<table border='1'>
					<tr>
						<th>행사명</th>
						<th>기간</th>
						<th>입금(원)</th>
						<th>출금(원)</th>
						<th>비고</th>
					</tr>";

				// 테이블 내용 출력
			while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td><a name ='".$row['행사명']."'Onclick='showSecondTable(this)'>" . $row['행사명'] . "</a></td>";
					echo "<td>" . $row['행사시작일']. "~" .$row['행사마감일'] . "</td>";
					echo "<td>" . number_format($row['입금']) . "</td>"; #해당 행사 입출금 합계 출력
					echo "<td>" . number_format($row['출금']) . "</td>"; #해당 행사 입출금 합계 출력				
					echo "<td>" . $row['비고'] . " 등</td>"; #맨 첫번째 내역 출력하게 수정
					echo "</tr>";
					$lastBalance = $row['잔액'];

				}
				echo "<tr><th>잔액(원)</th><td colspan='6'>" . number_format($lastBalance) . "</td></tr>";
				// echo "<tr><td colspan='6'><button onclick='openPopup()'>추가</button></td></tr>";

				// 테이블 마무리
				echo "</table>";
				} 	else {
				echo "테이블에 데이터가 없습니다.";
				}
			?>


			<?php
			echo "<p>   </p>";
			echo "<div id='secondTable'>";
		
			echo "<h2>제목..</h2>";
			
			// 데이터베이스 연결 정보
			$host = 'localhost'; // 호스트명
			$user = 'habin'; // 사용자명
			$pass = 'qwert1234';   // 비밀번호
			$dbname = 'univ'; // 데이터베이스 이름
    
			$eventName = mysqli_real_escape_string($conn, $_POST['eventname']); // SQL 삽입 방지를 위해 문자열 처리

			$query = "SELECT * FROM `2023` WHERE 학교코드=4 AND 행사명='중간고사 시격사'";
			$result = mysqli_query($conn, $query);
			

			if (mysqli_num_rows($result) > 0) {
			// 테이블 헤더 출력
				echo "<table  border='1'>
				<tr>
				<th>거래일시</th>
				<th>내역</th>
				<th>거래처</th>
				<th>출금(원)</th>
				<th>입금(원)</th>
				<th>거래방식</th>
				<th>잔액(원)</th>
				<th>거래점</th>
				<th>입금자명</th>
				<th>증빙</th>
			</tr>";

			// 테이블 내용 출력
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row['거래일시'] . "</td>";
				echo "<td>" . $row['내역'] . "</td>";
				echo "<td>" . $row['거래처'] . "</td>";
				echo "<td>" . number_format($row['출금(원)']) . "</td>";
				echo "<td>" . number_format($row['입금(원)']) . "</td>";
				echo "<td>" . $row['거래방식'] . "</td>";
				echo "<td>" . number_format($row['잔액(원)']) . "</td>";
				echo "<td>" . $row['거래점'] . "</td>";
				echo "<td>" . preg_replace('/.(?=.$)/u', '*', $row['입금자명']). "</td>";
				echo "<td><button>증빙내역</button></td>";
				echo "</tr>";
			}
			echo "<tr><td colspan='10'><button onclick='openPopup()'>추가</button></td></tr>";

			// 테이블 마무리
			echo "</table>";
			echo "</div>";
			} else {
			echo "테이블에 데이터가 없습니다.";
		}

		// 데이터베이스 연결 종료
		mysqli_close($conn);
		?>
            </div>
        </div>
    </div>

</body>

</html>
	
