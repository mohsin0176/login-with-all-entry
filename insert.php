 <?php

$con=mysqli_connect('localhost','root','','ums2');

if (isset($_POST['sign']))

{
	 $id=$_POST['id'];
	 $name=$_POST['name'];
	 $age=$_POST['age'];
	 $sql=" INSERT INTO innsert(id,name,age) values('$id','$name','$age')";
	 $result=mysqli_query($con,$sql);
	     

	
	 	echo '<script type="text/javascript">alert("Insert Success")</script>';
	 	header('location:display.php');
	 
}



 ?>
 