<?php
$db = mysqli_connect("localhost","root","","md");

 if(isset($_POST['submit'])){
	 $name=$_POST['name'];
	 $email=$_POST['age'];
	 $phone=$_POST['phone'];
	
	 $sql = "INSERT INTO arafath(name,age,phone) VALUES ('$name', '$email', '$phone')";
	  mysqli_query($db ,$sql);	

?>

<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form  method="post" action="" enctype="multipart/form-data >
   Name:<br>
  <input type="text" name="name" value="">
  <br>
   Age:<br>
   <input type="text" name="age" value=""><br>
   Phone:<br>
   <input type="text" name="phone" value="">
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form> 

<p></p>

</body>
</html>
