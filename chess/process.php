<table border="1">
<?php
    $size = $_POST['size'];
    $flag=0;
    for($i=1;$i<=$size;$i++){
        echo "<tr>";
        for($j=1;$j<=$size;$j++){
            if($flag==0){
                echo "<td style='background-color:black;width:20px'>-</td>";
                $flag=1;
            }
            else{
                echo "<td style='background-color:white; width:20px; color:white'>-</td>";
                $flag=0;
            }
        }
        if($flag==1){
            $flag=0;
        }
        else{
            $flag=1;
        }
        echo "</tr>";
    }

?>