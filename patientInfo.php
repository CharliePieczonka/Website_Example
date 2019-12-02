<?php
  // set up
  include "connecttoa2db.php";
  $OHIP = $_POST['OHIPNum'];

  // patient info query
  $query = "SELECT Patient.FirstName AS 'PatientFirst', Patient.LastName AS 'PatientLast', Doctor.FirstName AS 'DocFirst', Doctor.LastName AS 'DocLast' FROM Patient INNER JOIN Treats ON OHIPNum = PatientOHIPNum INNER JOIN Doctor ON DocLicenseNum = LicenseNum WHERE OHIPNum = '$OHIP'";
  $result = mysqli_query($connection,$query);
  if (!$result) {
    die("databases query failed.");
  }
  
  // if there is no patient with this OHIP Number, do nothing
  if (mysqli_num_rows($result) == 0){
    die("The patient you have requested does not exist. Please go back and try again.");
  }

  // print the info
  $row = mysqli_fetch_assoc($result);
  echo $row["PatientFirst"] . " " . $row["PatientLast"] . " is treated by " . $row["DocFirst"] . " " .$row["DocLast"];
  while ($row = mysqli_fetch_assoc($result)) {
    echo ", " . $row["DocFirst"] . " " .$row["DocLast"];
  }
  mysqli_free_result($result);
?>
