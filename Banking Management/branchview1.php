<html>
<head><title>update</title></head>
<body>
<?php


$conn=mysql_connect("localhost","root","");
if(!$conn)
{
   die('could not connect');
}
$sql="select * from Branch";
mysql_select_db('banking management');
$res=mysql_query($sql,$conn);
echo "<table border size=1>";
echo "<tr><th>Branch Name</th><th>City</th><th>Code</th></tr>";
if(!$res)
{
die('could not get data');
}
while($row=mysql_fetch_array($res,MYSQL_ASSOC))
{
   echo "<tr>
         <td>{$row['Name']}</td>
		 <td>{$row['City']}</td>
		 <td>{$row['Code']}</td>
		 </tr>\n";
		 }
		 echo "</table>";
		 mysql_close($conn);
 ?>
<h4><font color="cyan"><a href="index1.html">Click here to go back to home page</a></font></h4>
 </body>
</html>