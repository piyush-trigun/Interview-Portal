<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" href="css/style.css">

<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("imglink").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>
</head>
<body style="background-color:#bdc3c7">
	
	<form class="myform" action="register.php"method="post" enctype="multipart/form-data" >
		<div id="main-wrapper">
		<center>
			<h2>Registration Form</h2>
			<img id="uploadPreview" src="imgs/avatar.png" class="avatar"/><br>
			<input type="file" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="PreviewImage();"/>
		</center>
	
		
			<label><b>Email:</b></label><br>
			<input name="email" type="email" class="inputvalues" placeholder="Enter Your Email" required/><br>
			
			<label><b>Username:</b></label><br>
			<input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
			<label><b>Password:</b></label><br>
			<input name="password" type="password" class="inputvalues" placeholder="Your password" required/><br>
			<label><b>Confirm Password:</b></label><br>
			<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm password" required/><br>
			<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br>
			<a href="index.php"><input type="button" id="back_btn" value="Back"/></a>
		</form>
		
		<?php
			if(isset($_POST['submit_btn']))
			{
				
				$email =$_POST['email'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				$cpassword = $_POST['cpassword'];
				
				$img_name = $_FILES['imglink']['name'];
				$img_size =$_FILES['imglink']['size'];
			    $img_tmp =$_FILES['imglink']['tmp_name'];
				
				$directory = 'uploads/';
				$target_file = $directory.$img_name;
			  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
   {
   	echo "enter valid email";
   }
    else if (strlen($password)<8)
     {
                echo '<script type="text/javascript"> alert("password should be minimum 8 character") </script>';
            }

			else if($password==$cpassword)
				{
					
					$query1= "select * from fileuploadtable WHERE email='$email'";
					$query_run1 = mysqli_query($con,$query1);
					$query2= "select * from fileuploadtable WHERE username='$username'";
					$query_run2= mysqli_query($con,$query2);
					if(mysqli_num_rows($query_run1)>0)
					{
						// there is already a user with the same username
						echo '<script type="text/javascript"> alert("Email already exists.. try another email") </script>';
					}
					else if(mysqli_num_rows($query_run2)>0)
					{
						// there is already a user with the same username
						echo '<script type="text/javascript"> alert("User already exists.. try another username") </script>';
					}
					else if(file_exists($target_file))
					{
						echo '<script type="text/javascript"> alert("Image file already exists.. Try another image file") </script>';
					}
					
					else if($img_size>2097152)
					{
						echo '<script type="text/javascript"> alert("Image file size larger than 2 MB.. Try another image file") </script>';
					}
					
					else
					{
						move_uploaded_file($img_tmp,$target_file); 	
						$query= "insert into fileuploadtable values('','$username','$password','$email','$target_file')";
						$query_run = mysqli_query($con,$query);
					
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("User Registered.. Go to login page to login") </script>';

						}
						else
						{
							echo '<script type="text/javascript"> alert("Error!") </script>';
						}
							
					
					}	
						//header('location:index.php');
					
				}
				else
				{
					echo '<script type="text/javascript"> alert("Password and confirm password does not match!")</script>';	
				}
				
				
				
				
			}
		?>
	</div>
</body>
</html>