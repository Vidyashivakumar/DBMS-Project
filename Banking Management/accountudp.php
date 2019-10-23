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
$Acc_no=$_POST['Acc_no'];
$Acc_bal=$_POST['Acc_bal'];
$sql="update Account set Acc_bal='$Acc_bal' where Acc_no='$Acc_no'";
mysql_select_db('banking management');
$ret=mysql_query($sql,$conn);
if(!$ret)
{
  die('could not update data:');
  }
  
 echo "updated successfully\n";
 echo "<a href='accountview.php'>view record</a>";
 
 mysql_close($conn);
 }
 else
 {
 ?>
 <form method="post" action="">
 <table width "400" border="0" cellspacing="1" cellpadding="2">
 <tr>
 <td width="100">Acc_no</td>
 <td><input name="Acc_no" type="text" id="Acc_no"</td>
 </tr>
 <tr>
 <td width="100">Acc_bal</td>
 <td><input name="Acc_bal" type="text" id="Acc_bal"</td>
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