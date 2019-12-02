<?php
  // set up variables
  include "connecttoa2db.php";
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $spec = $_POST['spec'];
  $hosp = $_POST['hosp'];
  $licnum = $_POST['licNum'];
  $date = $_POST['licDate'];
  
  // make sure hospital value is not empty
  if ($hosp == ""){
    die("The hospital parameter cannot be empty. Please go back and try again.");
  }

  // make sure the hospital code is correct  
  $query = "SELECT HospitalCode FROM Hospital WHERE HospitalCode = '$hosp'";
  $result = mysqli_query($connection,$query);
  if (!$result) {
    die("databases query 1 failed.");
  }
  if (mysqli_num_rows($result) == 0){
    die("The hospital you have entered does not exist. Please go back and try again.");
  }
  mysqli_free_result($result);
  
  // check that the licence number input is not already taken
  $query = "SELECT FirstName FROM Doctor WHERE LicenseNum = '$licnum'";
  $result = mysqli_query($connection,$query);
  if (!$result) {
    die("databases query 2 failed.");
  }
  if (!mysqli_num_rows($result) == 0){
    die("The licence number input is already taken. Please go back and try again.");  
  }
  mysqli_free_result($result);

  // finally, add insert a new doctor with all of the provided values
  $query = "INSERT INTO Doctor (LicenseNum, FirstName, LastName, Specialty, DateLicensed, HospitalWorksFor) VALUES ('$licnum', '$fname', '$lname', '$spec', '$date', '$hosp')";
  $result = mysqli_query($connection,$query);
  if (!$result) {
    die("databases query 3 failed.");
  }
  else {
    // let the user know it was successful
    echo 'A doctor with the following parameters was successfully entered:' . "<br>";
    echo $fname. " " . $lname. ", " . $spec . ", " . $hosp . ", " . $licnum . ", " .  $date . "<br>";
  }
?>
