<?php
include("config.php");
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
    
    


</body>
</html>