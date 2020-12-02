 
<?php

  $con=mysqli_connect('localhost','root','','ums2'); 
  $id=$_GET["id"];
  $sql="SELECT * FROM innsert WHERE id='$id'";
  $query=mysqli_query($con,$sql);
  $result=mysqli_fetch_assoc($query);

 if(isset($_POST['btn']))

 {

  $sqldelete="DELETE innsert WHERE id=$id";
  $query=mysqli_query($con,$sqldelete); 
  header('location:display.php');

  
}
  

?>