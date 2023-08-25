<<<<<<< HEAD
<?php
	include ("db.php");
	
	$bno = $_GET['idx'];
	$sql = mq("delete from board where idx='$bno';");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
=======
<?php
	include ("db.php");
	
	$bno = $_GET['idx'];
	$sql = mq("delete from board where idx='$bno';");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
>>>>>>> d81e73c4841ac6212ad446296d8be7e95f5fcf42
<meta http-equiv="refresh" content="0 url=/mainboard.php" />