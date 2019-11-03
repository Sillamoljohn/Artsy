<?php
include_once "dbcon.php";

if (!empty($_POST["con_id"])) {
  $con_id = $_POST["con_id"];

  $query = "SELECT * FROM state WHERE con_id = $con_id";

  $results = mysqli_query($con, $query);
  ?>
  <option >select state</option>
  
  <?php

  foreach($results as $state){
    ?>

    <option value="<?php echo $state ["state_id"]; ?>"> <?php echo $state["state_name"]; ?></option>

     <?php
}
}
?>
