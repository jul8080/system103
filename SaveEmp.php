<?php
include "dbconnect.php";
$EmpID = "";
$fname = "";
$mname = "";
$lname = "";
$D_id = "";
$rankcode = "";
$messAlert = "";

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
if (isset($_POST["updaterec"])) {
  $pempID = $_POST["EmpID"];
  $pfn = $_POST["fname"];
  $pmn = $_POST["mname"];
  $plastn = $_POST["lname"];
  $pD_id = $_POST["D_id"];
  $pRC = $_POST["rankcode"];

  $sql = "UPDATE employee SET TEmpID='$pempID',Tfn='$pfn ',Tmn='$pmn',Tln='$plastn',TdeptID='$pD_id',Trankcode='$pRC' WHERE TEmpID='$pempID'";

  if ($conn->query($sql) === TRUE) {

    $messAlert = "<script>alert('Record Successfully Updated...')</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
if (isset($_POST["deleterec"])) {
  $pempID = $_POST["EmpID"];

  $sql = "DELETE FROM employee WHERE TEmpID = $pempID";

  if ($conn->query($sql) === TRUE) {

    $messAlert = "<script>alert('Record Successfully Deleted...')</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
if (isset($_POST['searchrec'])) {
  $pempID = $_POST["EmpID"];;
  $sql = "SELECT * FROM employee where TEmpID='$pempID'";
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
      $messAlert = "No data found!";
    }
  } else {
    $messAlert = "Something went wrong!";
  }
}

$conn->close();
