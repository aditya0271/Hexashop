<?php
include('../includes/config.php');

if (isset($_POST['insert_brand'])) {
  $brand_title = $_POST['brand_title'];

  // query to select data from database
  $select_query = "SELECT * FROM brands WHERE brand_title='$brand_title'";
  $result_select = mysqli_query($conn, $select_query);
  $number = mysqli_num_rows($result_select);

  if ($number > 0) {
    echo "<script> alert('This brands is already present in the database') </script>";
  } else {
    $insert_query = "INSERT INTO brands (brand_title) VALUES ('$brand_title')";
    $result_insert = mysqli_query($conn, $insert_query);

    if ($result_insert) {
      echo "<script> alert('Brands has been inserted') </script>";
    } else {
      echo "<script> alert('Error inserting category') </script>";
    }
  }
}
?>

<h2 class="text-center">Insert Brands</h2>
<form action="" method="post" class="mb-2">
  <div class="input-group w-90 mb-2">
    <span class="input-group-text bg-dark" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
    <input type="text" class="form-control" name="brand_title" placeholder=" Insert Brands" aria-label="Brands"
      aria-describedby="basic-addon1">
  </div>

  <div class="input-group w-10 mb-2 ">
    <input type="Submit" class="form-control bg-dark" name="insert_brand" values="Insert Brand">
  </div>
</form>