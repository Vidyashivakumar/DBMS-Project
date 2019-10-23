<html>
<head><title>update</title></head>
<body>
<?php


$conn=mysql_connect("localhost","root","");
if(!$conn)
{
   die('could not connect');
}
$sql="select * from Customer";
mysql_select_db('banking management');
$res=mysql_query($sql,$conn);
echo "<table border size=1>";
echo "<tr><th>Cus_id</th><th>Cus_Name</th><th>Cus_Street</th><th>Cus_City</th><th>Cus_Occupation</th></tr>";
if(!$res)
{
die('could not get data');
}
while($row=mysql_fetch_array($res,MYSQL_ASSOC))
{
   echo "<tr>
         <td>{$row['Cus_id']}</td>
		 <td>{$row['Cus_Name']}</td>
		 <td>{$row['Cus_Street']}</td>
		 <td>{$row['Cus_City']}</td>
		 <td>{$row['Cus_Occupation']}</td>
		 </tr>\n";
		 }
		 echo "</table>";
		 echo "Updated data succeessfully!!!!\n";
		 mysql_close($conn);
 ?>
<h4><font color="cyan"><a href="index1.html">click here to go back to home page</a></font></h4>
 </body>
</html>