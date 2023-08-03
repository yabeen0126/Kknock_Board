<?php
// 데이터베이스 연결 정보

$host = 'localhost'; // 호스트명
$user = 'habin'; // 사용자명
$pass = 'qwert1234';   // 비밀번호
$dbname = 'newdb'; // 데이터베이스 이름
    
// 데이터베이스 연결
$conn = mysqli_connect($host, $user, $pass, $dbname);

// 연결 확인
if (mysqli_connect_errno()) {
    die("데이터베이스 연결 실패: " . mysqli_connect_error());
}

// 데이터베이스에서 정보를 가져옵니다.
$query = "SELECT * FROM `2023` WHERE 학교코드=4";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // 테이블 헤더 출력
    echo "<table border='1'>
          <tr>
			<th>거래일시</th>
			<th>내역</th>
			<th>거래처</th>
			<th>출금(원)</th>
			<th>입금(원)</th>
			<th>거래방식</th>
			<th>잔액(원)</th>
			<th>거래점</th>
			<th>증빙</th>
          </tr>";

    // 테이블 내용 출력
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['거래일시'] . "</td>";
		echo "<td>" . $row['내역'] . "</td>";
		echo "<td>" . $row['거래처'] . "</td>";
		echo "<td>" . $row['출금(원)'] . "</td>";
		echo "<td>" . $row['입금(원)'] . "</td>";
		echo "<td>" . $row['거래방식'] . "</td>";
		echo "<td>" . $row['잔액(원)'] . "</td>";
		echo "<td>" . $row['거래점'] . "</td>";
		echo "<td><button>증빙내역</button></td>";
        echo "</tr>";
    }
	echo "<tr><td><input type='button' 
	value='행추가' 
	onclick='addRow()' /></td></tr>";
	

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
    <title>초록색</title>
</head>
<body>
	
