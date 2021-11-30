Filled.php

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "bheemesh");
// Check connection
if($link === false){
 die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Check if submit button is clicked
if(isset($_POST['submit'])){
	$EMP_name = $_POST['EMP_name'];
  $EMP_city  = $_POST['EMP_city'];
$EMP_departmet=$_POST['EMP_departmet'];
  // attempt insert query execution
  $sql = "INSERT INTO edetails (EMP_name, EMP_city,EMP_departmet) VALUES ('$EMP_name', '$EMP_city','$EMP_departmet')";
  if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
  } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
}
// close connection
mysqli_close($link);
?>
