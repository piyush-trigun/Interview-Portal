<?php
	include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>SEARCH</title>
</head>
<body>
<form action="search.php" method="POST">
	<input type="text" name="search" placeholder="Search Company Wise">
	<button type="submit" name="submit">Search</button>
</form>

<h1>Front page</h1>
<h2>All Interview Articles:</h2>

<div class="article-container">
<?php
	$sql = "SELECT DISTINCT company FROM content";
	$result = mysqli_query($conn, $sql);
	$queryResult = mysqli_num_rows($result);
	if ($queryResult > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
		
				echo "<a href='article.php?company=".$row['company']."&content=".$row['content']."'><div class='article-box'>";
			if ($row<=1) {
				# code...
			echo "<p>".$row['company']."</p>";
			//$number_of_rows = mysql_num_rows($result);  

			echo "</div></a>";
		}
		}
		echo "Number of interviews articles: ". $queryResult;
	} else {
		echo "There are no articles.";
	}
?>
</div>

</body>
</html>