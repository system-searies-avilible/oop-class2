<?php
class update1{
	
	function connect(){
$connect=mysqli_connect("localhost","root","","mydb");		
$select=mysqli_query($connect,"select * from tbl_form2 ");
$row=mysqli_fetch_array($select);		
	}
	function update2($id,$name,$fname,$age,$email,$pass){
$connect=mysqli_connect("localhost","root","","mydb");		
$update=mysqli_query($connect,"update tbl_form2 set name='$name',fname='$fname',age='$age',email='$email',password_pass='$pass' where id='$id'");		
	if($update){
	echo"<script>alert('updated  sucessfully');</script>";	
	echo"<script>window.location.assign('showdata.php');</script>";	
	
	}
else{
echo"<script>alert('cant be update sucessfully');</script>";	


}	
	}
	
	
}

?>