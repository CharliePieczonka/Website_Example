<?php
  // set up
  include "connecttoa2db.php";

  // unassigned Doctor info query
  $query = "SELECT FirstName, LastName FROM Doctor WHERE LicenseNum NOT IN (SELECT DocLicenseNum FROM Treats)";
  $result = mysqli_query($connection,$query);
  if (!$result) {
    die("databases query failed.");
  }

  // print the info
  while ($row = mysqli_fetch_assoc($result)) {
    echo  $row["FirstName"] . " " . $row["LastName"] . "<br>";
  }
  mysqli_free_result($result);
?>
