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
$Name=$_POST['Name'];
$Code=$_POST['Code'];
$sql="update Branch set Code='$Code' where Name='$Name'";
mysql_select_db('banking management');
$ret=mysql_query($sql,$conn);
if(!$ret)
{
  die('could not update data:');
  }
  
 echo "Updated successfully\n";
 echo "<a href='branchview.php'>view record</a>";
 
 mysql_close($conn);
 }
 else
 {
 ?>
 <form method="post" action="">
 <table width "400" border="0" cellspacing="1" cellpadding="2">
 <tr>
 <td width="100">Branch Name</td>
 <td><input name="Name" type="text" id="Name"</td>
 </tr>
 <tr>
 <td width="100">Code</td>
 <td><input name="Code" type="text" id="Code"</td>
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
<h4><font color="cyan"><a href="index1.html">Click here for Home page </a></font></h4>
</body>
</html>