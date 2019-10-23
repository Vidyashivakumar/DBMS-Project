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
$Loan_no=$_POST['Loan_no'];
$Loan_amt=$_POST['Loan_amt'];
$sql="update Loan set Loan_amt='$Loan_amt' where Loan_no='$Loan_no'";
mysql_select_db('banking management');
$ret=mysql_query($sql,$conn);
if(!$ret)
{
  die('could not update data:');
  }
  
 echo "updated successfully\n";
 echo "<a href='loanview.php'>view record</a>";
 
 mysql_close($conn);
 }
 else
 {
 ?>
 <form method="post" action="">
 <table width "400" border="0" cellspacing="1" cellpadding="2">
 <tr>
 <td width="100">Loan_no</td>
 <td><input name="Loan_no" type="text" id="Loan_no"</td>
 </tr>
 <tr>
 <td width="100">Loan_amt</td>
 <td><input name="Loan_amt" type="text" id="Loan_amt"</td>
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