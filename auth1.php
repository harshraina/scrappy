
<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: form1.php");
exit(); }
?>