<!doctype html>
<html>
	
	<head>
		<meta CHARSET='utf-8'>
		<link rel='stylesheet' type='text/css' href='style.css'/>
	</head>
	
	<?php
		session_start();
		
		if(isset($_POST['username'])&&(isset($_POST['password']))) {
			$db = new mysqli('localhost', 'root', 'root', 'my_to_do_list');
			$db->set_charset('utf8');
			if($db->connect_errno) {
				echo "problem";
			} else {
				
				$password = $_POST['password'];
				$username = $_POST['username'];
				
				$query = "SELECT id, username from users WHERE username = '".$username."' AND password ='".sha1($password)."'";
				$result = $db->query($query);
				if($result->num_rows) {
					echo "欢迎你！";
					$row = $result->fetch_assoc();
					$_SESSION['userid'] = $row['id'];
					$_SESSION['username'] = $row['username'];
					$result->free();
				} else {
					echo "你的密码或者用户名是有问题的";
				}
				
				$db->close();
			}			
		}
		
		if(isset($_SESSION['userid'])) {
			require_once('list.php');
		} else {
			
			echo "<form action='index.php' method='post'>";
			echo "<h2>欢迎你登录</h2>";
			echo "<label><span>投入你的用户名</span><input type='text' name='username'/></label>";
			echo "<label><span>你的密码</span><input type='password' name='password'/></label>";
			echo "<input type='submit' value='登录'/>";
			echo "</form>";
			echo "<a href='signup.php'>如果你还不是会员请你在这里登记</a>";			
		}

	?>

	
</html>