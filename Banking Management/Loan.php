<html>
<body bgcolor = 'grey'>
<?php
$dbh = mysql_connect ('localhost','root','') or die (mysql_error());
mysql_select_db('banking management') or die (mysql_error());
$Loan_no = $_REQUEST['Loan_no'];
$Name = $_REQUEST['Name'];
$Loan_amt = $_REQUEST['Loan_amt'];
$Purpose = $_REQUEST['Purpose'];
$interest=null;
$query = "insert into Loan values('$Loan_no','$Name','$Loan_amt','$Purpose','$interest')";
$result = mysql_query($query) or die(mysql_error());
echo "data inserted SUCCESSFULLY!!!";
$var = mysql_query("select * from Loan");
echo "<table border size = 1>";
echo "<tr><th>Loan_no</th><th>Branch Name</th><th>Loan_amt</th><th>Purpose</th><th>interest</th></tr>";
while($arr=mysql_fetch_row($var))
{
echo"<tr><td> $arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td></tr>";
}
echo "</table>";
$db_host="localhost";
$db_name="banking management";
$db_user="root";
$db_pass="";
$con = mysql_connect("$db_host","$db_user","$db_pass")or die("couldnot connect");
mysql_select_db('banking management')or die(mysql_error());
$po = mysql_query("call sum_of_interest(@out);");
$rs = mysql_query('SELECT @out');
while($row = mysql_fetch_row($rs))
{
echo 'Total_amt='.$row[0];
}
mysql_close($con);

?>
<br>
<a href="index1.html" /a> click here for homepage
<br>
<a href="Loan.html" /a> Click here for Insertion
<br>
</body>
</html>