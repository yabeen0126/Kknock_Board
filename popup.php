<!-- 팝업 창의 내용 -->
<!DOCTYPE html>
<html lang="en">
<body>
    <h2>내역 추가</h2>
    <form id="dataForm" action="add_data.php" method="post">
        <table>
            <tr>
                <th>학교코드</th>
                <td><input type="number" name="univId"></td>
            </tr>
            <tr>
                <th>학교명</th>
                <td><input type="text" name="univName"></td>
            </tr>
            <tr>
                <th>학과코드</th>
                <td><input type="number" name="groupId"></td>
            </tr>
            <tr>
                <th>학과명</th>
                <td><input type="text" name="groupName"></td>
            </tr>
            <tr>
				<th>학기</th>
				<td>
					<input type="radio" name="semester" value="1"> 1학기
					<input type="radio" name="semester" value="2"> 2학기
				</td>
			</tr>
            <tr>
                <th>행사명</th>
                <td><input type="text" name="eventName"></td>
            </tr>
            <tr>
				<th>기간</th>
				<td><input type="date" name="eventStartDate">~<input type="date" name="eventEndDate"></td>
			</tr>
			<tr>
                <th>내역</th>
                <td><input type="text" name="detail"></td>
            </tr>
			<tr>
                <th>거래처</th>
                <td><input type="text" name="transactionPartner"></td>
            </tr>
			<tr>
                <th>거래방식</th>
                <td><input type="text" name="transactionMethod"></td>
            </tr>
			<tr>
                <th>거래일시</th>
                <td><input type="date" name="transactionDate"></td>
            </tr>
			<tr>
                <th>입금(원)</th>
                <td><input type="text" name="eventDeposit"></td>
            </tr>
            <tr>
                <th>출금(원)</th>
                <td><input type="text" name="eventWithdrawal"></td>
            </tr>
			<tr>
                <th>잔액(원)</th>
                <td><input type="text" name="balanceAmount"></td>
            </tr>
            <tr>
                <th>거래점</th>
                <td><input type="text" name="transactionShop"></td>
            </tr>
			<tr>
                <th>입금자명</th>
                <td><input type="text" name="depositorName"></td>
            </tr>
        </table>
    <button type="submit">추가</button>
</form>
    
    <!-- 추가한 데이터를 부모 창으로 전달 -->
</body>
</html>