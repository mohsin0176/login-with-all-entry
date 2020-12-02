<?php
  

  if (isset($_POST['search']))
  {
    
   $word=$_POST['word'];
   $filter="SELECT * FROM `innsert` WHERE CONCAT(`id`,`name`,`age`) LIKE '%".$word."%' ";
   $search_result=filterTable($filter);
  }

  else
  {
   
   $filter="SELECT * FROM innsert";
   $search_result=filterTable($filter);

  }

  function filterTable($filter)
  {
      $con=mysqli_connect('localhost','root','','ums2');
      $filter_result=mysqli_query($con,$filter);
      return $filter_result;
  }

  ?>