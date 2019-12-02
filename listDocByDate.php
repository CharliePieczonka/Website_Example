<?php
  include "connecttoa2db.php";
  $date = $_POST['licDate'];
  $query = "SELECT * FROM Doctor WHERE DateLicensed > '$date'";
  $result = mysqli_query($connection,$query);
  if (!$result) {
    die("databases query failed.");
  }
  while ($row = mysqli_fetch_assoc($result)) {
  echo $row["FirstName"] . " " . $row["LastName"] . ", " . $row["Specialty"] . ", " . $row["DateLicensed"] . "<br>";
  }
  mysqli_free_result($result);

?>
