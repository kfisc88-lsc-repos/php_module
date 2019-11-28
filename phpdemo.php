<?php
  // form processing
  $custFirstName = "";
  $custLastName = "";
  $custAddr1 = "";
  $custAddr2 = "";
  $custCity = "";
  $custState = "";
  $custZip = "";

  if (isset($_POST['btnSubmit'])) {
    $custFirstName  = $_POST['custFirstName'];
    $custLastName   = $_POST['custLastName'];
    $custAddr1      = $_POST['custAddr1'];
    $custAddr2      = $_POST['custAddr2'];
    $custCity       = $_POST['custCity'];
    $custState      = $_POST['custState'];
    $custZip        = $_POST['custZip'];
  }

?>

<!-- Header -->
<?php include 'templates/header.html'; ?>
<!-- Navigation Bar -->
<?php include 'templates/navbar.html'; ?>

<h3><?php
  if($custFirstName <> "") {
    echo $custFirstName;
    echo $custLastName; 
    echo $custAddr1;
    echo $custAddr2;
    echo $custCity;
    echo $custState;
    echo $custZip;
  }
?></h3>

<form name="customerInfo" id="customerForm" action="phpdemo.php" method="post">

  <label for="fname">First Name</label>
  <input type="text" name="custFirstName" id="fname" class="form-control" />

  <label for="lname">Last Name</label>
  <input type="text" name="custLastName" id="lname" class="form-control" />

  <label for="addr1">Address 1</label>
  <input type="text" name="custAddr1" id="addr1" class="form-control" />

  <label for="addr2">Address 2</label>
  <input type="text" name="custAddr2" id="addr2" class="form-control" />

  <label for="city">City</label>
  <input type="text" name="custCity" id="city" class="form-control" />

  <label for="state">State</label>
  <input type="text" name="custState" id="state" class="form-control" />

  <label for="zip">ZIP</label>
  <input type="text" name="custZip" id="zip" class="form-control" />

  <button type="submit" name="btnSubmit" class="button" value="SUBMIT">
  Submit
  </button>
</form>

<!-- Footer -->
<?php include 'templates/footer.html'; ?>
