<?php
session_start();
$cedula = $_SESSION['cedu'];
if(!isset($cedula)){
  header("location: login.php");
}
?>
<?php
include ("includes/header.php")
?>


<?php include ("includes/footer.php")?>