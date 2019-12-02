<?php
  // set up
  include "connecttoa2db.php";

  // hospital info query
  $query = "SELECT Name, FirstName, LastName, DateStarted FROM Hospital INNER JOIN Doctor ON HeadDocLicenseNum = LicenseNum ORDER BY Name";
  $result = mysqli_query($connection,$query);
  if (!$result) {
    die("databases query failed.");
  }
  
  // print the info
  while ($row = mysqli_fetch_assoc($result)) {
    echo  $row["Name"] . ", " . $row["FirstName"] . " " . $row["LastName"] . ", " .$row["DateStarted"] . "<br>";
  }
  mysqli_free_result($result);
?>
