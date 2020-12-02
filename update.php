<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
      td,th{
        border: 2px solid black;
        width: 100px;
        text-align: center;
      }
    </style>
    <title>Log_In</title>
  </head>
  <body>
  
<div class="container">
<div class="jumbotron">
<div class="card-body">


<!-------------------------------------->
  <?php
  $con=mysqli_connect('localhost','root','','ums2');
  $sql="SELECT * FROM innsert";
  $query=mysqli_query($con,$sql);
  ?>
  <!-------------------------------------->
  
  <table>
    <thead>
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>AGE</th>
      <th>ACTION</th>
    </tr>
    </thead>

    <tbody>
        <?php while ($result=mysqli_fetch_assoc($query)) { ?>
        <tr>
        <td><?php echo $result["id"] ?></td>
        <td><?php echo $result["name"] ?></td>
        <td><?php echo $result["age"] ?></td>
        <td><a class="glyphicon glyphicon-edit"href="update2.php?id=<?php echo $result["id"] ?>"></a></td>
        </tr>
    <?php } ?>
    </tbody>
  </table>
<!------------------------------>


</div>	
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>