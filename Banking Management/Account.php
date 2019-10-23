<html>
<body bgcolor = 'grey'>
<?php
$dbh = mysql_connect ('localhost', 'root', '') or die (mysql_error());
mysql_select_db('banking management') or die (mysql_error());

$Acc_no = $_REQUEST['Acc_no'];
$Name = $_REQUEST['Name'];
$Acc_bal = $_REQUEST['Acc_bal'];

$query = "insert Account VALUES ('$Acc_no','$Name','$Acc_bal')";
$result = mysql_query($query) or die(mysql_error());
echo "data inserted SUCCESSFULLY!!!";
 
$var = mysql_query("select * from Account");
echo "<table border size = 1>";
echo "<tr><th>Acc_no</th> <th>Branch Name</th><th>Acc_bal</th> </tr>";
while($arr=mysql_fetch_row($var))
{
echo"<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td></tr>";
}
echo"</table>";
?>
<a href="index1.html" /a> click here for homepage
<br>
<a href="Account.html" /a> Click here for Insertion
<br>
</body>
</html>