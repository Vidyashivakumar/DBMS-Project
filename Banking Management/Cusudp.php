<html>
<head><title>update</title></head>
<body>
<?php
if(isset($_POST['update']))
{
$conn=mysql_connect("localhost","root","");
if(!$conn)
{
   die('could not connect');
}
$Cus_id=$_POST['Cus_id'];
$Cus_Street=$_POST['Cus_Street'];
$sql="update Customer set Cus_Street='$Cus_Street' where Cus_id='$Cus_id'";
mysql_select_db('banking management');
$ret=mysql_query($sql,$conn);
if(!$ret)
{
  die('could not update data:');
  }
  
 echo "updated successfully\n";
 echo "<a href='cusview.php'>view record</a>";
 
 mysql_close($conn);
 }
 else
 {
 ?>
 <form method="post" action="">
 <table width "400" border="0" cellspacing="1" cellpadding="2">
 <tr>
 <td width="100">Cus_id</td>
 <td><input name="Cus_id" type="text" id="Cus_id"</td>
 </tr>
 <tr>
 <td width="100">Cus_Street</td>
 <td><input name="Cus_Street" type="text" id="Cus_Street"</td>
</tr>
<tr>
<td width="100"></td>
<td></td>
</tr>
<td width="100"></td>
<td>
<input name="update" type="submit" id="update" value="UPDATE">
</td>
</tr>
</table>
</form>
<?php
}
?>
<h4><font color="cyan"><a href="index1.html">click here to go back to the home page </a></font></h4>
</body>
</html>