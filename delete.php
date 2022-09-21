<?php
$id=$_GET['id'];
include "deleteclass.php";
$dle=new delete1();
$dle->connect();
$dle->delete2($id);
?>