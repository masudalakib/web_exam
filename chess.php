<!DOCTYPE html>
<html>
<head>
    <title>Chess Board</title>
    <style>
        .black {
            background-color: black;
            width: 30px;
            height: 30px;
        }
        .white {
            background-color: white;
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>
    <table width="270px" cellspacing="0px" cellpadding="0px">
        <?php
        for($row=1; $row<=8; $row++) {
            echo "<tr>";
            for($col=1; $col<=8; $col++) {
                $total=$row+$col;
                if($total%2==0) {
                    echo "<td class='black'></td>";
                } else {
                    echo "<td class='white'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>