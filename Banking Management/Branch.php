<html>
<body bgcolor = 'grey'>
<?php
$dbh = mysql_connect ('localhost','root','') or die (mysql_error());
mysql_select_db('banking management') or die (mysql_error());

$Name = $_REQUEST['Name'];
$City = $_REQUEST['City'];
$Code = $_REQUEST['Code'];

$query = "insert into Branch values('$Name','$City','$Code')";
$result = mysql_query($query) or die(mysql_error());
echo "data inserted SUCCESSFULLY!!!";

$var = mysql_query("select * from Branch");

echo "<table border size=1>";
echo "<tr><th>Branch Name</th> <th>Branch City</th> <th>Branch Code</th> </tr>";
while($arr=mysql_fetch_row($var))
{
echo"<tr><td> $arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td></tr>";
}
echo"</table>";
 echo"<br>";
?>
<a href="index1.html" /a> Click here for Homepage
<br>
<a href="Branch.html" /a> Click here for Insertion
<br>
</body>
</html>