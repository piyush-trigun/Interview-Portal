<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<form action="" method="POST">
	<label> Name:
	<input type="text" name="Name" class="Input" style="width: 100px" required>
</label>
<br><br>
<label> Comment: <br>
 
<textarea name="Comment"  class="Input"style="width: 300px" required></textarea>
</label>
<br><br>
<input type="submit" name="Submit" value="submit comment" id="Submit">
</form>
</body>
</html>
<?php
if(isset($_POST['Submit'])){
	print "<h1>your comment has been submitted!</h1>";
	$Name = $_POST['Name'];
	$Comment = $_POST['Comment'];
	#get old comments
	$old = fopen("comments.txt", "r+t");
	$old_comments = fread($old, 1024);
	#Delete everything, write new and old comments.
	$write = fopen("Comments.txt", "w+");
	$string = "<b>".$Name."</b><br>".$Comment."<br>\n".$old_comments;
fwrite($write, $string);
fclose($write);
fclose($old);
}
#read comments
$read = fopen("comments.txt", "r+t");
echo "<br><br>Comments<hr>".fread($read, 1024);
fclose($read);
?> 
