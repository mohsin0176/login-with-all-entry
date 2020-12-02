 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
<?php include('se.php') ?>
	<!-------------------------------------->
	<h4>Display Table Data Here</h4>
  <form action="search.php" method="POST">
  <input type="text" name="word" placeholder="Search">
  <input type="submit" name="search" value="SEARCH"><br> <br>
  <table>
    <thead>
      <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>AGE</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row=mysqli_fetch_assoc($search_result)) : ?>
      	<tr>
      		<td><?php echo $row['id'] ?></td>
      		<td><?php echo $row['name'] ?></td>
      		<td><?php echo $row['age'] ?></td>
      	</tr>
        <?php endwhile; ?>
    </tbody>
  </table>
</form>
	<!-------------------------------------->


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