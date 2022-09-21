<?php

class delete1
{
function connect()
{
$connect=mysqli_connect("localhost","root","","mydb");

}	
function delete2($id)
{
$connect=mysqli_connect("localhost","root","","mydb");
$delete=mysqli_query($connect,"update tbl_form2 set status='0' where id='$id'");
if($delete){
echo"<script>alert('deleted sucessfully');</script>";	
echo"<script>window.location.assign('showdata.php');</script>";	
	
	
	
}
else{
echo"<script>alert('data can't be deleted');</script>";	

	
	
}

}	
	
}

?>