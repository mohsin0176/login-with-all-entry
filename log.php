 <?php

$con=mysqli_connect('localhost','root','','ums2');

if (isset($_POST['submit']))

{
	 $id=$_POST['id'];
	 $name=$_POST['name'];
	 $sql = "SELECT *FROM student WHERE id = '$id' and name = '$name'";
	 $result=mysqli_query($con,$sql);
     $count = mysqli_num_rows($result);


	 if ($count==1) 
	 {
	 	echo '<script type="text/javascript">alert("Log In Success")</script>';
	 }
	 else 
	 {
	 	echo '<script type="text/javascript">alert("Log In Failed")</script>';
	 }

}



 ?>
 
