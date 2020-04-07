<?php
  $conn = mysqli_connect('127.0.0.1','root','');
  if(!$conn)
    echo 'connection failed';
  $db = mysqli_select_db($conn,'studentdata');
  if(!$db)
    echo 'database not selected';
 ?>
<html>
<head>
</head>
    <body>
    <table border="solid">
        <tr>
            <td>ID</td>
            <td>first_name</td>
            <td>last_name</td>
            <td>email</td>
         </tr>

<?php
  $fetch = "select * from data order by first_name desc";
  $result = mysqli_query($conn,$fetch);
  while($row=mysqli_fetch_assoc($result))
  {
     echo '<tr>';
     echo '<td>'.$row['id'].'</td>';
     echo '<td>'.$row['first_name'].'</td>';
     echo '<td>'.$row['last_name'].'</td>';
     echo '<td>'.$row['email'].'</td>';
     echo '</tr>';
  }
?>
</table>
    </body>
</html>