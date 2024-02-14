<?php
include "connectRank.php";
$Rankcode="";
$Ranktitle="";
$Rate="";
$messAlert="";

if(isset($_POST["saverec"])){
$Rankcode=$_POST["Rankcode"];
$Ranktitle=$_POST["Ranktitle"];
$Rate=$_POST["Rate"];


$sql = "INSERT INTO Rank (Trankcode, Tranktitle, Trate)
VALUES ('$Rankcode', '$Ranktitle', '$Rate')";

if ($conn->query($sql) === TRUE) {

  $messAlert= "<script>alert('Record Successfully Created...')</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}      
}

$conn->close();

?>
