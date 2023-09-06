<?php
$location = $_POST["location"];
$area = $_POST["area"];
$unitconsumed = $_POST["unitconsumed"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "electricity_bill";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 $sql = "SELECT location, area, rate_0_75, rate_76_200, rate_201_300, rate_301_above FROM `bill_info` WHERE location='$location' AND area='$area'";
// $sql = "SELECT * FROM `bill_info`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if ($row["location"] == "Dhaka") {
        if ($unitconsumed <= 75) {
            $bill = $unitconsumed * $row["rate_0_75"];
            $tax = $bill % 20;
            $total_bill = $bill + $tax;
            echo "Your location: " . $row["location"]. "<br>Your area: " . $row["area"]. "<br>Unit consumed: " . $unitconsumed. "<br>Total bill: ". $total_bill;
        }
        if ($unitconsumed >= 76 && $unitconsumed <= 200) {
            $p1 = $unitconsumed - 75;
            $bill1 = 75 * $row["rate_0_75"];
            $bill2 = $p1 * $row["rate_76_200"];
            $bill = $bill1 + $bill2;
            $tax = $bill % 20;
            $total_bill = $bill + $tax;
            echo "Your location: " . $row["location"]. "<br>Your area: " . $row["area"]. "<br>Unit consumed: " . $unitconsumed. "<br>Total bill: ". $total_bill;
        }
        if ($unitconsumed >= 201 && $unitconsumed <= 300) {
            $p1 = $unitconsumed - 200;
            $bill1 = 75 * $row["rate_0_75"];
            $bill2 = 125 * $row["rate_76_200"];
            $bill3 = $p1 * $row["rate_201_300"];
            $bill = $bill1 + $bill2 + $bill3;
            $tax = $bill % 20;
            $total_bill = $bill + $tax;
            echo "Your location: " . $row["location"]. "<br>Your area: " . $row["area"]. "<br>Unit consumed: " . $unitconsumed. "<br>Total bill: ". $total_bill;
        }
        if ($unitconsumed >= 301) {
            $p1 = $unitconsumed - 300;
            $bill1 = 75 * $row["rate_0_75"];
            $bill2 = 125 * $row["rate_76_200"];
            $bill3 = 175 * $row["rate_201_300"];
            $bill4 = $p1 * $row["rate_301_above"];
            $bill = $bill1 + $bill2 + $bill3 + $bill4;
            $tax = $bill % 20;
            $total_bill = $bill + $tax;
            echo "Your location: " . $row["location"]. "<br>Your area: " . $row["area"]. "<br>Unit consumed: " . $unitconsumed. "<br>Total bill: ". $total_bill;
        }
    }
    
    if ($row["location"] == "Chittagong") {
        if ($unitconsumed <= 75) {
            $bill = $unitconsumed * $row["rate_0_75"];
            $tax = $bill % 15;
            $total_bill = $bill + $tax;
            echo "Your location: " . $row["location"]. "<br>Your area: " . $row["area"]. "<br>Unit consumed: " . $unitconsumed. "<br>Total bill: ". $total_bill;
        }
        if ($unitconsumed >= 76 && $unitconsumed <= 200) {
            $p1 = $unitconsumed - 75;
            $bill1 = 75 * $row["rate_0_75"];
            $bill2 = $p1 * $row["rate_76_200"];
            $bill = $bill1 + $bill2;
            $tax = $bill % 15;
            $total_bill = $bill + $tax;
            echo "Your location: " . $row["location"]. "<br>Your area: " . $row["area"]. "<br>Unit consumed: " . $unitconsumed. "<br>Total bill: ". $total_bill;
        }
        if ($unitconsumed >= 201 && $unitconsumed <= 300) {
            $p1 = $unitconsumed - 200;
            $bill1 = 75 * $row["rate_0_75"];
            $bill2 = 125 * $row["rate_76_200"];
            $bill3 = $p1 * $row["rate_201_300"];
            $bill = $bill1 + $bill2 + $bill3;
            $tax = $bill % 15;
            $total_bill = $bill + $tax;
            echo "Your location: " . $row["location"]. "<br>Your area: " . $row["area"]. "<br>Unit consumed: " . $unitconsumed. "<br>Total bill: ". $total_bill;
        }
        if ($unitconsumed >= 301) {
            $p1 = $unitconsumed - 300;
            $bill1 = 75 * $row["rate_0_75"];
            $bill2 = 125 * $row["rate_76_200"];
            $bill3 = 175 * $row["rate_201_300"];
            $bill4 = $p1 * $row["rate_301_above"];
            $bill = $bill1 + $bill2 + $bill3 + $bill4;
            $tax = $bill % 15;
            $total_bill = $bill + $tax;
            echo "Your location: " . $row["location"]. "<br>Your area: " . $row["area"]. "<br>Unit consumed: " . $unitconsumed. "<br>Total bill: ". $total_bill;
        }
    }
    
    if ($row["location"] == "Sylhet") {
        if ($unitconsumed <= 75) {
            $bill = $unitconsumed * $row["rate_0_75"];
            $tax = $bill % 10;
            $total_bill = $bill + $tax;
            echo "Your location: " . $row["location"]. "<br>Your area: " . $row["area"]. "<br>Unit consumed: " . $unitconsumed. "<br>Total bill: ". $total_bill;
        }
        if ($unitconsumed >= 76 && $unitconsumed <= 200) {
            $p1 = $unitconsumed - 75;
            $bill1 = 75 * $row["rate_0_75"];
            $bill2 = $p1 * $row["rate_76_200"];
            $bill = $bill1 + $bill2;
            $tax = $bill % 10;
            $total_bill = $bill + $tax;
            echo "Your location: " . $row["location"]. "<br>Your area: " . $row["area"]. "<br>Unit consumed: " . $unitconsumed. "<br>Total bill: ". $total_bill;
        }
        if ($unitconsumed >= 201 && $unitconsumed <= 300) {
            $p1 = $unitconsumed - 200;
            $bill1 = 75 * 3.19;
            $bill2 = 125 * 4.378;
            $bill3 = $p1 * 5.225;
            $bill = $bill1 + $bill2 + $bill3;
            $tax = (10 / 100) * $bill;
            $total_bill = $bill + $tax;
            echo $total_bill."<br>";
            echo "Your location: " . $row["location"]. "<br>Your area: " . $row["area"]. "<br>Unit consumed: " . $unitconsumed. "<br>Total bill: ". $total_bill;
        }
        if ($unitconsumed >= 301) {
            $p1 = $unitconsumed - 300;
            $bill1 = 75 * $row["rate_0_75"];
            $bill2 = 125 * $row["rate_76_200"];
            $bill3 = 175 * $row["rate_201_300"];
            $bill4 = $p1 * $row["rate_301_above"];
            $bill = $bill1 + $bill2 + $bill3 + $bill4;
            $tax = $bill % 10;
            $total_bill = $bill + $tax;
            echo "Your location: " . $row["location"]. "<br>Your area: " . $row["area"]. "<br>Unit consumed: " . $unitconsumed. "<br>Total bill: ". $total_bill;
        }
    }
  }
} else {
  echo "0 results";
}
$conn->close();
?>