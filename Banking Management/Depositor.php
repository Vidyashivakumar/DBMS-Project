<html>
<body bgcolor = 'grey'>
<?php
$dbh = mysql_connect ('localhost','root','') or die (mysql_error());
mysql_select_db('banking management') or die (mysql_error());
$Cus_id = $_REQUEST['Cus_id'];
$Acc_no = $_REQUEST['Acc_no'];
$query = "insert into Depositor values('$Cus_id','$Acc_no')";
$result = mysql_query($query) or die(mysql_error());
echo "data inserted SUCCESSFULLY!!!";
$var = mysql_query("select * from Depositor");
echo "<table border size = 1>";
echo "<tr><th>Cus_id</th><th>Acc_no</th></tr>";
while($arr=mysql_fetch_row($var))
{
echo"<tr><td> $arr[0]</td><td>$arr[1]</td></tr>";
}
echo"</table>";
?>
<a href="index1.html" /a> click here for homepage
<br>
<a href="Depositor.html" /a> Click here for Insertion
<br>
</body>
</html>