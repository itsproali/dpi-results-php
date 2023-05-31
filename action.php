<?php
session_start();


// Database Connection
$mysqli = new mysqli('localhost', 'root', '', 'dpi_results') or die(mysqli_error($mysqli));




// Create Logic
if (isset($_POST['add'])) {
  $name = $_POST['name'];
  $roll = $_POST['roll'];
  $registration = $_POST['registration'];
  $java = $_POST['java'];
  $surveillance = $_POST['surveillance'];
  $logic_system = $_POST['logic_system'];
  $web = $_POST['web'];
  $pcb = $_POST['pcb'];
  $operating = $_POST['operating'];
  $total = $java + $surveillance + $logic_system + $web + $pcb + $operating;
  $percentage = $total / 4.4;




  $mysqli->query("INSERT INTO marksheet ( `name`, `roll` ,`registration`,`java`,`surveillance`,`logic_system`,`web`,`pcb`,`operating`,`total`,`percentage` ) VALUES ('$name','$roll','$registration','$java','$surveillance','$logic_system','$web','$pcb','$operating','$total','$percentage')") or die(mysqli->error);



  $_SESSION['message'] = "Student has been added";
  $_SESSION['message_type'] = 'success';
  header("location:index.php");

}

if (isset($_POST['edit'])) {
  $ID = $_POST['ID'];
  $name = $_POST['name'];
  $roll = $_POST['roll'];
  $registration = $_POST['registration'];
  $java = $_POST['java'];
  $surveillance = $_POST['surveillance'];
  $logic_system = $_POST['logic_system'];
  $web = $_POST['web'];
  $pcb = $_POST['pcb'];
  $operating = $_POST['operating'];
  $total = $java + $surveillance + $logic_system + $web + $pcb + $operating;
  $percentage = $total / 4.4;
  $mysqli->query("UPDATE `marksheet` SET `name` = '$name', `roll` = '$roll', `registration` = '$registration', `java` = '$java', `surveillance` = '$surveillance', `logic_system` = '$logic_system', `web` = '$web', `pcb` = '$pcb', `operating` = '$operating', `total` = '$total', `percentage` = '$percentage' WHERE `ID` = $ID;") or die($mysqli->error());

  $_SESSION['message'] = "Student has been updated";
  $_SESSION['message_type'] = 'warning';
  header('location:index.php');
}


// Delete Logic
if (isset($_GET['delete'])) {
  $ID = $_GET['delete'];

  $mysqli->query("DELETE FROM marksheet WHERE ID=$ID") or die(mysqli->error);

  $_SESSION['message'] = "Student has been deleted";
  $_SESSION['message_type'] = 'danger';
  header("location:index.php");
}


?>