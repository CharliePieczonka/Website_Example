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

  // set the doctor to treat this patient
  $query = "INSERT INTO Treats (DocLicenseNum, PatientOHIPNum) VALUES ('$licnum', '$OHIP')";
  $result = mysqli_query($connection,$query);
  if (!$result) {
    die("This doctor is already assigned to this patient.");
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
      echo 'The doctor has been assigned to patient ';
      echo $row["FirstName"] . " " . $row["LastName"];
    } 
  }
  mysqli_free_result($result);
?>
