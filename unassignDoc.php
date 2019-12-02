<?php
  // set up variables
  include "connecttoa2db.php";
  $licnum = $_POST['licNum'];
  $OHIP = $_POST['OHIPNum'];

  // make sure the License Number is correct
  $query = "SELECT FirstName FROM Doctor WHERE LicenseNum = '$licnum'";
  $result = mysqli_query($connection,$query);
  if (!$result) {
    die("databases query 1 failed.");
  }
  if (mysqli_num_rows($result) == 0){
    die("No doctor associated with the licence number entered. Please go back and try again.");
  }
  mysqli_free_result($result);

  // make sure the OHIP Number is correct
  $query = "SELECT FirstName FROM Patient WHERE OHIPNum = '$OHIP'";
  $result = mysqli_query($connection,$query);
  if (!$result) {
    die("databases query 2 failed.");
  }
  if (mysqli_num_rows($result) == 0){
    die("No patient associated with the OHIP number entered. Please go back and try again.");
  }
  mysqli_free_result($result);

  // unassign the doctor from this patient
  $query = "DELETE FROM Treats WHERE DocLicenseNum = '$licnum' AND PatientOHIPNum = '$OHIP'";
  $result = mysqli_query($connection,$query);
  if (!$result) {
    die("databases query 3 failed.");
  }
  else{
    // get the patient name to print to the user
    $query = "SELECT FirstName, LastName FROM Patient WHERE OHIPNum = '$OHIP'";
    $result = mysqli_query($connection,$query);
    if (!$result) {
      die("databases query 4 failed.");
    }
    else{
      $row = mysqli_fetch_assoc($result);
      echo 'The doctor has been unassigned from patient ';
      echo $row["FirstName"] . " " . $row["LastName"];
    }
  }
  mysqli_free_result($result);
?>

