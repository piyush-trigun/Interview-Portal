
<!DOCTYPE html>
<html>
<head>
<title>CK Editor</title>
<script src="ckeditor/ckeditor.js"></script>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
  <div id="main-wrapper">
  <center><h2>INTERVIEW EXPERIENCE</h2></center>
    <form action="index1.php" method="post">
      <div class="inner_container">
        <label><b>company_name</b></label><br>
        <input name="company" type="text" class="inputvalues" placeholder="Enter Company Name" required><br>
        <label><b>year</b></label>
        <input name="year" type="radio"  class="radiobtns" value="3" required/>3
        <input name="year" type="radio"  class="radiobtns" value="4" checked required>4<br>
         <label><b><center>write interview experience</center></b></label><br>
        <textarea class="ckeditor" name="editor"></textarea><br>
       <input name="submit" type="submit" id="submit_btn" value="SUBMIT"/><br>
      </div>
    </form>
    </div>
    </body>
    </html>
<?php 
   
     $con=mysqli_connect('localhost','root','','ckeditor');
     if(isset($_POST['submit'])) {
     $company=$_POST['company'];
     $year=$_POST['year'];
     $content=$_POST['editor'];
     if($year==3||$year==4)
     {
     $sql="INSERT INTO content(company,year,content) VALUES('$company','$year','$content')";
     $query=mysqli_query($con,$sql);
     if($query)
      {
         echo '<script type="text/javascript"> alert("Submited")</script>';
      }  
     else
     {
          echo '<script type="text/javascript"> alert("error")</script>';

     }
   }
     else
     {
          echo '<script type="text/javascript"> alert("Only 3rd AND 4th year can post")</script>'; 
        }
     }
    
?>