<?php
	include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Interview Experiences</h1>
<div class="article-container">
<?php
	$sql = "SELECT * FROM content";
	$result = mysqli_query($conn, $sql);
	$queryResult = mysqli_num_rows($result);
	if ($queryResult > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<div class='article-box'>";
			echo "<h3>".$row['company']."</h3>";
			echo "<p>".$row['content']."</p>";

			echo "</div>";
		}
	} else {
		echo "There are no articles.";
	}
?>
</div>
<a href="comment/index.php"><input type="button" id="register_btn" value="COMMENT"/></a><br>
</body>
</html>