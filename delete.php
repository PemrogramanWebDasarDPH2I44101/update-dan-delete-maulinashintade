<?php
require_once("db.php");


$id=$_GET['id'];

$sql ="DELETE from siswa where id =$id ";
mysqli_query($conn, $sql);

header("Location:connect2.php");

?>