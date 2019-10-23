<html>
<body>
<?php
if(isset($_POST['retrieve']))
{
$conn=mysqli_connect("localhost","root","",'banking management');
if(!$conn)
{
	die('could not connect:');
}
$Cus_id=$_POST['Cus_id'];
$sql="select  * from Customer where Cus_id='$Cus_id'";
#dbh=mysqli_select_db('banking management');
$result=$conn->query($sql);
if(!$result)
{
	die('could not get data:');
}
	echo "Fetched data Successfully\n";
	echo "<table border size=1>";
echo "<tr><th>Cus_id</th><th>Cus_Name</th><th>Cus_Street</th><th>Cus_City</th><th>Cus_Occupation</th></tr>";



	while($row=mysqli_fetch_array($result))
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
	mysqli_close($conn);
}
else{
	?>
	<form method="post" action="" >
	<table width="400" border="0" cellspacing="1" cellpadding="2">
	<tr>
   <td width="100">Cus_id</td>
   <td><input name="Cus_id" type="text" id="Cus_id"</td>
   </tr>
   <tr>
  <td width="100"></td>
  <td></td>
  </tr>
  <td width="100"></td>
  <td>
  <input name="retrieve" type="submit" id="retrieve" value="RETRIEVE">
  </td>
  </tr>
  </table>
  </form>
 <?php 
}
   
?> 
<h4><font color="cyan"><a href="index1.html">click here to go back to the home page </a></font></h4> 
</body>
</html>