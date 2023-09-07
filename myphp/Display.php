<?php
include("config.php");
$result = mysqli_query($mysqli, "SELECT* from record ORDER by id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="function.php" method= "POST">
       Name <input type="text" name="name" id=""> <br>
        Email<input type="email" name="email" id=""> <br>
        Mobile<input type="number" name="mobile" id=""> <br>
        Date<input type="date" name="date" id=""> <br>
        <input type="submit" name="submit" value="submit"> <br>

    </form>
    <table border="2">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Mobile</td>
        <td>Date</td>
    </tr>
  
    
    <?php
      while($res = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$res['name']."</td>";
        echo "<td>".$res['email']."</td>";
        echo "<td>".$res['mobile']."</td>";    
        echo "<td>".$res['date']."</td>"; 
        echo "</tr>";
                
    }
    ?>
  </table>

</body>
</html>