<?php
include('../includes/config.php');

if (isset($_POST['insert_cat'])) {
  $category_title = $_POST['cat_title'];

  // query to select data from database
  $select_query = "SELECT * FROM categories WHERE category_title='$category_title'";
  $result_select = mysqli_query($conn, $select_query);
  $number = mysqli_num_rows($result_select);

  if ($number > 0) {
    echo "<script> alert('This Category is already present in the database') </script>";
  } else {
    $insert_query = "INSERT INTO categories (category_title) VALUES ('$category_title')";
    $result_insert = mysqli_query($conn, $insert_query);

    if ($result_insert) {
      echo "<script> alert('Category has been inserted') </script>";
    } else {
      echo "<script> alert('Error inserting category') </script>";
    }
  }
}
?>


<h2 class="text-center">Insert Categories</h2>
<form action="" method="post" class="mb-2">
  <div class="input-group w-90 mb-2">
    <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
    <input type="text" class="form-control" name="cat_title" placeholder=" Insert categories" aria-label="Categories"
      aria-describedby="basic-addon1">
  </div>

  <div class="input-group w-10 mb-2">
    <input type="Submit" class="form-control bg-info" name="insert_cat" values="Insert Categories">
  </div>
</form>