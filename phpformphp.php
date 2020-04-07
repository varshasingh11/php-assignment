<?php
  $con = mysqli_connect('127.0.0.1','root','');
  $db = mysqli_select_db($con,'studentdata');
  if(!$con)
      echo 'connection failed';
  if($db==false)
      echo 'database not found';
  @$id = $_POST['id'];
  @$first_name = $_POST['fname'];
  @$last_name = $_POST['lname'];
  @$email = $_POST['email'];

  $sql = "insert into data (id,first_name,last_name,email) values ('$id','$first_name','$last_name','$email')";
  $query = mysqli_query($con,$sql);
  if(!$query)
      echo 'data not inserted';
  else
      echo 'data insertion successful'; 
  header("refresh:2");
  header("location:redirectTo.php");
?> 