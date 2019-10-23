<html>
<head><title>update</title></head>
<body>
<?php


$conn=mysql_connect("localhost","root","");
if(!$conn)
{
   die('could not connect');
}
$sql="select * from Account";
mysql_select_db('banking management');
$res=mysql_query($sql,$conn);
echo "<table border size=1>";
echo "<tr><th>Acc_no</th><th>Branch Name</th><th>Acc_bal</th></tr>";
if(!$res)
{
die('could not get data');
}
while($row=mysql_fetch_array($res,MYSQL_ASSOC))
{
   echo "<tr>
         <td>{$row['Acc_no']}</td>
		 <td>{$row['Name']}</td>
		 <td>{$row['Acc_bal']}</td>
		 </tr>\n";
		 }
		 echo "</table>";
		 mysql_close($conn);
 ?>
<h4><font color="cyan"><a href="index1.html">Click here to go back to home page</a></font></h4>
 </body>
</html>