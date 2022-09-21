<?php
include "updateclass.php";
$upd=new update1();
$upd->connect();
$id=$_GET['id'];
$connect=mysqli_connect("localhost","root","","mydb");
$select=mysqli_query($connect,"select * from tbl_form2 where id='$id'");
$row=mysqli_fetch_array($select);
if(isset($_POST['btn_upd'])){
	$name=$_POST['txtname'];
	$fname=$_POST['txtfname'];
	$age=$_POST['txtage'];
	$email=$_POST['txtemail'];
	$pass=$_POST['txtpass'];
	$upd->update2($id,$name,$fname,$age,$email,$pass);
	
}

?>
<form method="post">
<table border="2">
<tr>
<th>Name :</th>
<td><input type="text" name="txtname" value="<?php echo $row[1];?>"></td>
</tr>

<tr>
<th>Father Name :</th>
<td><input type="text" name="txtfname" value="<?php echo $row[2];?>"></td>
</tr>

<tr>
<th>Age :</th>
<td><input type="text" name="txtage" value="<?php echo $row[3];?>"></td>
</tr>

<tr>
<th>Email :</th>
<td><input type="email" name="txtemail" value="<?php echo $row[4];?>"></td>
</tr>

<tr>
<th>Password :</th>
<td><input type="password" name="txtpass" value="<?php echo $row[5];?>"></td>
</tr>

<tr>
<th> :</th>
<td><input type="submit" name="btn_upd" value="Update"></td>
</tr>
</table>

</form>
