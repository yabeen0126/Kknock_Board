<?php
 // 데이터베이스 연결 설정
    $host = 'localhost';
    $user = 'habin';
    $pass = 'qwert1234';
    $dbname = 'univ';
    
    // 데이터베이스 연결
    $conn = mysqli_connect($host, $user, $pass, $dbname);
    
    // 데이터베이스 연결 확인
    if (mysqli_connect_errno()) {
        die("데이터베이스 연결 실패: " . mysqli_connect_error());
    }
    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $univId = $_POST['univId'];
    $univName = $_POST['univName'];
    $groupId = $_POST['groupId'];
    $groupName = $_POST['groupName'];
	if (isset($_POST['semester'])) {
		if ($_POST['semester'] == "1") {
			$semester = "1학기";
		} elseif ($_POST['semester'] == "2") {
			$semester = "2학기";
		}
	}
    $eventName = $_POST['eventName'];
    $eventStartDate = $_POST['eventStartDate'];
    $eventEndDate = $_POST['eventEndDate'];
    $detail = $_POST['detail'];
    $transactionPartner = $_POST['transactionPartner'];
    $transactionMethod = $_POST['transactionMethod'];
    $transactionDate = $_POST['transactionDate'];
    $eventDeposit = $_POST['eventDeposit'];
    $eventWithdrawal = $_POST['eventWithdrawal'];
	$balanceAmount = $_POST['balanceAmount'];
    $transactionShop = $_POST['transactionShop'];
    $depositorName = $_POST['depositorName'];
    
    // 여기서 데이터베이스에 데이터를 저장하거나 원하는 작업을 수행합니다.
    // 예시로는 데이터베이스 연결 및 INSERT 쿼리를 실행하는 부분을 추가해야 합니다.
    // 다음은 예시 코드이므로 실제로 사용하는 데이터베이스 및 테이블에 맞게 수정해야 합니다.
    
   
    // INSERT 쿼리 실행
    $query = "INSERT INTO `2023` (`학교코드`, `학교명`, `학과코드`, `학과명`, `학기`, `행사명`, `행사시작일`, `행사마감일`, `내역`, `거래처`, `거래방식`, `거래일시`, `입금(원)`, `출금(원)`, `잔액(원)`, `거래점`, `입금자명`) VALUES ('$univId', '$univName', '$groupId', '$groupName', '$semester', '$eventName', '$eventStartDate', '$eventEndDate', '$detail', '$transactionPartner', '$transactionMethod', '$transactionDate', '$eventDeposit', '$eventWithdrawal', '$balanceAmount','$transactionShop', '$depositorName')";
    
    if (mysqli_query($conn, $query)) {
        echo "데이터가 성공적으로 저장되었습니다.";
    } else {
        echo "데이터 저장 실패: " . mysqli_error($conn);
    }

    // 데이터베이스 연결 종료
    mysqli_close($conn);
}
?>
