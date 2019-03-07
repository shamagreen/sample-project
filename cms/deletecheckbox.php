<?php
//delete.php
$connect = mysqli_connect("localhost", "root", "", "test_db");
if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
  $query = "DELETE FROM tbl_customer WHERE customerId = '".$id."'";
  mysqli_query($connect, $query);
 }
}
?>