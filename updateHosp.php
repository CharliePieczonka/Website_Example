<?php
  // set up variables
  include "connecttoa2db.php";
  $hosp = $_POST['hospCode'];
  $newname = $_POST['newName'];

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

  // update the hospital's name
  $query = "Update Hospital SET Name = '$newname' WHERE HospitalCode = '$hosp'";
  $result = mysqli_query($connection,$query);
  if (!$result) {
    die("databases query 2 failed.");
  }
  else{
    echo 'Hospital name updated successfully.';
  }
?>
