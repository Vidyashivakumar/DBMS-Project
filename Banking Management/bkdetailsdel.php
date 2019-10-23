<html>
<body >
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('banking management') or die (mysql_error());

$Name=$_REQUEST['Name'];



$query="delete from Branch where Name='$Name'";
$result=mysql_query($query) or die(mysql_error());
echo "data deleted successfully!!!!";

$var=mysql_query("SELECT * from Branch");
echo"<table border size=1>";
echo"<tr><th>Name</th> <th>City</th> <th>Code</th> </tr>";
while ($arr=mysql_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> </tr>";
}
echo"</table>";

?>

<h4><font color="cyan"><a href="bkdetailsdel.html">click here to delete the Branch details</a></font></h4>
<h4><font color="cyan"><a href="index1.html">click here to go back to the home page </a></font></h4>
</body>
</html>