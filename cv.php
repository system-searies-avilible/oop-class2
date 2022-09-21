<form method="post">
<table border="2">
<tr>
<th>Name :</th>
<td><input type="text" name="txtname"></td>
</tr>

<tr>
<th>Father Name :</th>
<td><input type="text" name="txtfname"></td>
</tr>

<tr>
<th>Age :</th>
<td><input type="text" name="txtage"></td>
</tr>

<tr>
<th>Email :</th>
<td><input type="email" name="txtemail"></td>
</tr>

<tr>
<th>Password :</th>
<td><input type="password" name="txtpass"></td>
</tr>

<tr>
<th> :</th>
<td><input type="submit" name="btn_sub" value="register"></td>
</tr>
</table>

</form>

<?php
include "connect.php";
$obj=new form();

if(isset($_POST['btn_sub'])){
$obj-> insert_data($_POST['txtname'],$_POST['txtfname'],$_POST['txtage'],$_POST['txtemail'],$_POST['txtpass']);	
	
}


?>