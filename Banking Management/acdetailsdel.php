<html>
<body >
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('banking management') or die (mysql_error());

$Acc_no=$_REQUEST['Acc_no'];



$query="delete from Account where Acc_no='$Acc_no'";
$result=mysql_query($query) or die(mysql_error());
echo "data deleted successfully!!!!";

$var=mysql_query("SELECT * from Account");
echo"<table border size=1>";
echo"<tr><th>Acc_no</th> <th>Name</th> <th>Acc_bal</th> </tr>";
while ($arr=mysql_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> </tr>";
}
echo"</table>";

?>

<h4><font color="cyan"><a href="acdetailsdel.html">click here to delete the Account details</a></font></h4>
<h4><font color="cyan"><a href="index1.html">click here to go back to the home page </a></font></h4>
</body>
</html>