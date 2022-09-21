<?php
class form
{	
function connection()
{
	$connect=mysqli_connect("localhost","root","","mydb");	
		
	
}	
	
function insert_data($name,$fname,$age,$email,$pass){
	
$connect=mysqli_connect("localhost","root","","mydb");	
$insert=mysqli_query($connect,"insert into tbl_form2 values('','$name','$fname','$age','$email','$pass','1')");
if($insert){
echo"<script>alert('register sucessfully');</script>";	
echo"<script>window.location.assign('showdata.php');</script>";	
}


}	
	function showdata(){
$connect=mysqli_connect("localhost","root","","mydb");			
	$select=mysqli_query($connect,"select * from tbl_form2 where status='1'");
	$num=mysqli_num_rows($select);
	
	for($i=0; $i<$num; $i++){
	$row=mysqli_fetch_array($select);
echo"<tr>";	
echo"<td>".$row[0]."</td>";
echo"<td>".$row[1]."</td>";
echo"<td>".$row[2]."</td>";
echo"<td>".$row[3]."</td>";
echo"<td>".$row[4]."</td>";
echo"<td>".$row[5]."</td>";

echo"<td>".'<a href="update.php?id='.$row[0].'">Update</a>'."</td>";
echo"<td>".'<a href="delete.php?id='.$row[0].'">Delete</a>'."</td>";
echo"</tr>";	
		
	}
	}
	
	
}
?>