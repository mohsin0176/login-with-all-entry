
<?php

  $con=mysqli_connect('localhost','root','','ums2'); 
  $id=$_GET["id"];
  $sql="SELECT * FROM innsert WHERE id='$id'";
  $query=mysqli_query($con,$sql);
  $result=mysqli_fetch_assoc($query);

 if(isset($_POST['btn']))

 {

  $id=$_POST["id"];
  $name=$_POST["name"];
  $age=$_POST["age"];
  $sqlupdate="UPDATE innsert SET id='$id',name='$name',age='$age' WHERE id='$id'";
  $query=mysqli_query($con,$sqlupdate); 
  header('location:display.php');

  
}
  

?>