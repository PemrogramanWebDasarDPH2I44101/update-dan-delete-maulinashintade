<?php
require_once("db.php");

$id   		= $_POST['id'];
$nama       = $_POST['nama'];
$nama       = $_POST['nim'];
$tgl_lahir  = $_POST['tgl_lahir'];


$sql="UPDATE siswa SET nim='$nim',nama='$nama',tgal_lahir='$tgal_lahir' where id='$id'";
mysqli_query($conn, $sql);

header("location:connect2.php");
?>