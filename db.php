<?php

	header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩

	// localhost = DB주소, web=DB계정아이디, 1234=DB계정비밀번호, post_board="DB이름"
	//$db = new mysqli("localhost","yabeen","1q2w3e4r","Kknockboard"); 
	$db = new mysqli("localhost","habin","qwert1234","Kknockboard"); 
	$db->set_charset("utf8");

	function mq($sql)
	{
		global $db;
		return $db->query($sql);
	}
?>
