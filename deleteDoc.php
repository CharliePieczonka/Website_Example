<?php
  // set up variables
  include "connecttoa2db.php";
  $licnum = $_POST['licNum'];

  // delete the doctor with the input license number
  $query = "DELETE FROM Doctor WHERE LicenseNum  = '$licnum'";
  $result = mysqli_query($connection,$query);
  if (!$result) {
    die("databases query failed.");
  }
  if (mysqli_affected_rows($connection) == 0){
    die("Doctor with the input license number not found.");
  }
  else{
    echo 'doctor successfully deleted';
  }
?>
