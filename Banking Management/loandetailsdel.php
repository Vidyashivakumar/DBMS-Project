<html>
<body >
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('banking management') or die (mysql_error());

$Loan_no=$_REQUEST['Loan_no'];



$query="delete from Loan where Loan_no='$Loan_no'";
$result=mysql_query($query) or die(mysql_error());
echo "data deleted successfully!!!!";

$var=mysql_query("SELECT * from Loan");
echo"<table border size=1>";
echo"<tr><th>Loan_no</th> <th>Branch Name</th> <th>Loan_amt</th> <th>Purpose</th> <th>interest</th> </tr>";
while ($arr=mysql_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> </tr>";
}
echo"</table>";

?>

<h4><font color="cyan"><a href="loandetailsdel.html">click here to delete the Account details</a></font></h4>
<h4><font color="cyan"><a href="index1.html">click here to go back to the home page </a></font></h4>
</body>
</html>