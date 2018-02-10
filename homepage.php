<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
	
	<div id="main-wrapper">
		<center>
			<h2>Home Page</h2>
			<h3>Welcome
				<?php echo $_SESSION['username'] ?>
			</h3>
			<?php echo '<img class="avatar" src="'.$_SESSION["imglink"].'">';?>
		</center>
	
		<form class="myform" action="homepage.php" method="post">
			<input name="logout" type="submit" id="logout_btn" value="Log Out"/><br>
			<a href="article/index1.php"><input name="article" type="button" id="logout_btn" value="Write Intrview Experience"/></a>
		</form>
		
		<?php
			if(isset($_POST['logout']))
			{
				session_destroy();
				header('location:index.html');
			}
		?>
	</div>
</body>
</html>