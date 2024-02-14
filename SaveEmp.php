<?php
include "dbconnect.php";
$EmpID = "";
$fname = "";
$mname = "";
$lname = "";
$D_id = "";
$rankcode = "";
$messAlert = "";
function getInfo()
{
  $search = array();
  $search[0] = $_POST['EmpID'];
  $search[1] = $_POST['fname'];
  $search[2] = $_POST['mname'];
  $search[3] = $_POST['lname'];
  $search[4] = $_POST['D_id'];
  $search[5] = $_POST['rankcode'];
  return $search;
}
if (isset($_POST["saverec"])) {
  $pempID = $_POST["EmpID"];
  $pfn = $_POST["fname"];
  $pmn = $_POST["mname"];
  $plastn = $_POST["lname"];
  $pD_id = $_POST["D_id"];
  $pRC = $_POST["rankcode"];

  $sql = "INSERT INTO employee (TEmpID, Tfn, Tmn, Tln,TDeptID,Trankcode)
VALUES ('$pempID', '$pfn', '$pmn','$plastn','$pD_id','$pRC')";

  if ($conn->query($sql) === TRUE) {

    $messAlert = "<script>alert('Record Successfully Created...')</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
if (isset($_POST['searchUser'])) {
  $dataSeach = getInfo();
  $sql = "SELECT * FROM employee where TEmpID='$dataSeach[0]'";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    if (mysqli_num_rows($result)) {
      while ($row = mysqli_fetch_array($result)) {

        $EmpID = $row['TEmpID'];
        $fname = $row['Tfn'];
        $mname = $row['Tmn'];
        $lname = $row['Tln'];
        $D_id = $row['TdeptID'];
        $rankcode = $row['Trankcode'];
      }
    } else {
      echo "No data found!";
    }
  } else {
    echo "Something went wrong!";
  }
}

$conn->close();
