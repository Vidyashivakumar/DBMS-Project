<html>
<head><title>update</title></head>
<body>
<?php


$conn=mysql_connect("localhost","root","");
if(!$conn)
{
   die('could not connect');
}
$sql="select * from Depositor";
mysql_select_db('banking management');
$res=mysql_query($sql,$conn);
echo "<table border size=1>";
echo "<tr><th>Cus_id</th><th>Acc_no</th></tr>";
if(!$res)
{
die('could not get data');
}
while($row=mysql_fetch_array($res,MYSQL_ASSOC))
{
   echo "<tr>
         <td>{$row['Cus_id']}</td>
	<td>{$row['Acc_no']}</td>
		 </tr>\n";
		 }
		 echo "</table>";
		  mysql_close($conn);
 ?>
<h4><font color="cyan"><a href="index1.html">Click here for Home page</a></font></h4>
 </body>
</html>