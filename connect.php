<?php
 echo "php";
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname ="web_exam";

 // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// require_once "connect.php";

 $sql = "SELECT * FROM `fruits`";
$statement = $conn->prepare($sql);
$statement->execute();

$product = $statement->fetchAll(PDO::FETCH_ASSOC);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <td>id</td>
            <td>name</td>
            <td>price</td>
            <td>quality</td>
        </thead>>
            
      
        <tbody>
            <?php foreach($products as $product): ?>
                <tr>
                    <td>1</td>
                    <td>name</td>
                    <td>price</td>
                    <td>quality</td>
                </tr>
                
            <?php endforeach;  ?>
        </tbody>>

      
            
        

    </table>
</body>
</html>
