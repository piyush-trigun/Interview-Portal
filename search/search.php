<h1>search page</h1>

<div class="article-container">
<?php
	include 'header.php';

	if (isset($_POST["submit"])) {
		$search = mysqli_real_escape_string($conn, $_POST['search']);
		$sql = "SELECT * FROM content WHERE company LIKE '%$search%' OR content LIKE '%$search%'";
		$result = mysqli_query($conn, $sql);
		$queryResult = mysqli_num_rows($result);
		if ($queryResult > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<a href='article.php?company=".$row['company']."&content=".$row['content']."'><div class='article-box'>";
					echo "<h3>".$row['company']."</h3>";
					echo "<p>".$row['content']."</p>";
				
				echo "</div></a>";
			}
		} else {
			echo "There are no articles.";
		}
	} else {
		echo "There are no results!";
	}
?>
</div>