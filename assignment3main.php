<html>
  <head>
    <title> CS 3319 Assignment 3 </title>
    <style>
      p{
        margin-bottom:0;
        font-weight:bold;
      }
    </style>
  </head>
  <body>
    <h1>Hospital Database</h1>
    <p>List Doctor's First & Last Names</p>
    <form action="./listDocByName.php", method="post">
      <label class="radio-inline">
        <input type="radio" name="nametype" value="fname" checked>first name
      </label>
      <label class="radio-inline">
        <input type="radio" name="nametype" value="lname">last name<br>
      </label>
      <label class="radio-inline">
        <input type="radio" name="order" value="asc" checked>ascending
      </label>
      <label class="radio-inline">
        <input type="radio" name="order" value="desc">descending<br>
      </label>
      <input type="submit" value="List Doctors">
    </form>
    <p>List Doctors Licenced Before a Date</p>
    <form action="./listDocByDate.php", method="post">
      Date (yyyy-mm-dd): <input type="date" name="licDate">
      <input type="submit" value="List Doctors">
    </form>
    <p>Enter a New Doctor</p>
    <form action="./enterNewDoc.php", method="post">
      First Name: <input type="search" name="fname">
      Last Name: <input type="search" name="lname"><br>
      Specialty: <input type="search" name="spec">    
      Hospital Code: <input type="search" name="hosp"><br>
      Licence Number: <input type="search" name="licNum">    
      Date Licenced (yyyy-mm-dd): <input type="date" name="licDate"><br>
      <input type="submit", value="Enter Doctor">
    </form>
    <p>Delete a Doctor</p>
    <form action="./deleteDoc.php", method="post">
      Doctor's Licence Number: <input type="search" name="licNum">
      <input type="submit", value="Delete Doctor">
    </form>
    <p>Update Hospital Name</p>
    <form action="./updateHosp.php", method="post">
      Hospital Code: <input type="search" name="hospCode">
      New Name: <input type="search" name="newName">
      <input type="submit", value="Update Hospital">
    </form>
    <p>List Hospital Info</p>
    <form action="./hospitalInfo.php">
      <input type="submit", value="List Hospital Info">
    </form>
    <p>List Patient Info</p>
    <form action="./patientInfo.php", method="post">
      Patient's OHIP #: <input type="search" name="OHIPNum">
      <input type="submit", value="List Patient Info">
    </form>
    <p>Assign Doctor to Patient</p>
    <form action="./assignDoc.php", method="post">
      Doctor Licence #: <input type="search" name="licNum">
      Patient OHIP  #: <input type="search" name="OHIPNum">
      <input type="submit", value="Assign Doctor">
    </form>
    <p>Unassign Doctor from Patient</p>
    <form action="./unassignDoc.php", method="post">
      Doctor Licence #: <input type="search" name="licNum">
      Patient OHIP  #: <input type="search" name="OHIPNum">
      <input type="submit", value="Unassign Doctor">
    </form>
    <p>List Unassigned Doctors</p>
    <form action="./unassignedDoc.php">
      <input type="submit", value="List Doctors">
    </form>
  </body>
  <?php
    include "connecttoa2db.php";
  ?>
</html>

