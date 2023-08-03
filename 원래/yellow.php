<?php
// 데이터베이스 연결 정보

$host = 'localhost'; // 호스트명
$user = 'jihyun'; // 사용자명
$pass = '1234';   // 비밀번호
$dbname = 'univ'; // 데이터베이스 이름
    
// 데이터베이스 연결
$conn = mysqli_connect($host, $user, $pass, $dbname);

// 연결 확인
if (mysqli_connect_errno()) {
    die("데이터베이스 연결 실패: " . mysqli_connect_error());
}

// 데이터베이스에서 정보를 가져옵니다.
$query = "SELECT `행사명`, `행사시작일`, `행사마감일`,`입금(원)`+`출금(원)` AS `총계`, MAX(내역) AS `비고` FROM `2023` WHERE 학교코드=4 and 학과코드=90 GROUP BY 행사명";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // 테이블 헤더 출력
    echo "<table border='1'>
          <tr>
            <th>1학기(2023)</th>
			<th>기간</th>
			<th>금액</th>
			<th>비고</th>
          </tr>";

    // 테이블 내용 출력
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td><a href='링크'>" . $row['행사명'] . "</a></td>"; #해당 학교, 학과, 학기의 여러 값 중 고유값만 나오게 출력
		echo "<td>" . $row['행사시작일']. "~" .$row['행사마감일'] . "</td>";
		echo "<td>" . $row['총계'] . "</td>"; #해당 행사 입출금 합계 출력
		echo "<td>" . $row['비고'] . " 등</td>"; #맨 첫번째 내역 출력하게 수정
        echo "</tr>";
    }
	echo "<tr><td><button>추가</button></td></tr>";

    // 테이블 마무리
    echo "</table>";
} else {
    echo "테이블에 데이터가 없습니다.";
}

// 데이터베이스 연결 종료
mysqli_close($conn);
?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>노랑색</title>
</head>
<body>
	
