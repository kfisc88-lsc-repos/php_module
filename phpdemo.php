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

<main>
<form name="customerInfo" id="customerForm" action="phpdemo.php" method="post">
<h2 class="heading" id="formHeader">Customer Information</h2>
  <label for="fname">First Name</label>
  <input type="text" name="custFirstName" id="fname"/>

  <label for="lname">Last Name</label>
  <input type="text" name="custLastName" id="lname"/>

  <label for="addr1">Address 1</label>
  <input type="text" name="custAddr1" id="addr1"/>

  <label for="addr2">Address 2</label>
  <input type="text" name="custAddr2" id="addr2"/>

  <label for="city">City</label>
  <input type="text" name="custCity" id="city"/>

  <label for="state">State</label>
  <input type="text" name="custState" id="state"/>

  <label for="zip">ZIP</label>
  <input type="text" name="custZip" id="zip"/>

  <button type="submit" name="btnSubmit" class="button" value="SUBMIT">
  Submit
  </button>
</form>
<h3><?php
  if($custFirstName <> "") {
    echo "Thank you "." ".$custFirstName.", for your submission.";
  }
?></h3>
</main>
<!-- Footer -->
<?php include 'templates/footer.html'; ?>
