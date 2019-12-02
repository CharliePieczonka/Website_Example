<?php
  include "connecttoa2db.php";
  $nametype = $_POST['nametype'];
  $order = $_POST['order'];
  if($nametype == "fname"){
    if($order == "asc"){
      $query = "SELECT FirstName, LastName FROM Doctor ORDER BY FirstName ASC";
    }
    else if($order == "desc"){
      $query = "SELECT FirstName, LastName FROM Doctor ORDER BY FirstName DESC";
    }
  }
  else if($nametype == "lname"){
    if($order == "asc"){
      $query = "SELECT FirstName, LastName FROM Doctor ORDER BY LastName ASC";
    }
    else if($order == "desc"){
      $query = "SELECT FirstName, LastName FROM Doctor ORDER BY LastName DESC";
    }
  }

  $result = mysqli_query($connection,$query);
  if (!$result) {
    die("databases query failed.");
  }
  while ($row = mysqli_fetch_assoc($result)) {
    echo $row["FirstName"] . " " . $row["LastName"] . "<br>";
  }
  mysqli_free_result($result);
?>
