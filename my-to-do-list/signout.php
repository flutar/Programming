<!doctype html>
<html>
	<head>
		<meta CHARSET='utf-8'>
	</head>
	
	<?php
		session_start();
		if(isset($_SESSION['userid'])) {
			session_destroy();
			echo "你已经推出了";
		} else {
			echo "你还没有登录呢";
		}
		echo "<br/>";
		echo "<a href='index.php'>你想登录吗？</a>";
	?>
</html>