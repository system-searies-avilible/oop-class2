<table border="2">
<tr>
<th>ID</th>
<th>NAME</th>
<th>FATHER NAME</th>
<th>AGE</th>
<th>EMAIL</th>
<th>PASSWORD</th>
<th>STATUS</th>
</tr>


<?php
include "connect.php";
$show=new form();
$show->showdata();

?>
</table>